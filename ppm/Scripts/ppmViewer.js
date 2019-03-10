$(function () {
    'use strict';

    var canvasContext,
        canvas = $('#canvas'),
        ppmInput = $('#ppmInput');

    if (!canvas[0].getContext) {
        alert('Your browser does not support canvas!');
        return;
    }

    function loadSample() {
        function loadSampleCallback(d) {
            if (d) {
                ppmInput.val(d.q || '');
            }
        }

        $.getJSON('Images/smile.ppm.json', loadSampleCallback);
    }

    function render() {
        var width, height, currentLine,
            i, lineSplits, lineSplitsLength,
            currentRow = 0,
            currentCol = 0,
            ppmText = ppmInput.val(),
            ppmLines = ppmText.split('\n'),
            ppmLinesLength = ppmLines.length,
            lineIndex = 0;

        function isCommentLine(line) {
            return line.charAt(0) === '#';
        }

        function skipToNextLine() {
            var line = ppmLines[lineIndex];
            while (!line || isCommentLine(line)) {
                lineIndex += 1;
            }
        }

        // Header
        skipToNextLine();
        if (ppmLines[lineIndex] !== 'P3') {
            alert('Invalid PPM File -- Expecting Header P3');
            return;
        }
        lineIndex += 1;

        // get width
        skipToNextLine();
        width = parseInt(ppmLines[lineIndex], 10);
        if (!width || width <= 0) {
            alert('Invalid PPM File -- Expecting Width');
            return;
        }
        lineIndex += 1;

        // get height
        skipToNextLine();
        height = parseInt(ppmLines[lineIndex], 10);
        if (!height || height <= 0) {
            alert('Invalid PPM File -- Expecting Height');
            return;
        }
        lineIndex += 1;

        // get color depth
        skipToNextLine();
        if (ppmLines[lineIndex] !== '255') {
            alert('Non 255 Color Depths Not Supported');
            return;
        }
        lineIndex += 1;

        canvas.width(width);
        canvas.height(height);
        canvasContext = canvas[0].getContext('2d');
        canvasContext.canvas.width = width;
        canvasContext.canvas.height = height;

        canvasContext.fillStyle = 'rgb(255,255,255)';
        canvasContext.fillRect(0, 0, canvasContext.canvas.width, canvasContext.canvas.width);

        while (lineIndex < ppmLinesLength) {
            currentLine = ppmLines[lineIndex];
            if (currentLine && !isCommentLine(currentLine)) {
                lineSplits = currentLine.split(' ');
                lineSplitsLength = lineSplits.length;
                if (lineSplitsLength % 3 !== 0) {
                    alert('Problem parsing PPM File on line ' + lineIndex.toString() + ' -- Not enough numbers');
                    return;
                }
                for (i = 0; i < lineSplitsLength; i += 3) {
                    canvasContext.fillStyle = 'rgb(' + lineSplits[i] + ',' + lineSplits[i + 1] + ',' + lineSplits[i + 2] + ')';
                    canvasContext.fillRect(currentCol, currentRow, 1, 1);

                    currentCol += 1;
                    if (currentCol >= width) {
                        currentCol = 0;
                        currentRow += 1;
                    }
                }
            }
            lineIndex += 1;
        }

        if (currentRow < height) {
            alert('Not Enough Colors Were Found -- Image May Be Incomplete');
            return;
        }
    }

    $('#renderButton').click(render);
    $('#sampleButton').click(loadSample);
});
