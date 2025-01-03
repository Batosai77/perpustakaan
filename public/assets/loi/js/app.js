/**
 * Format Number With Commas
 * 
 * @param {int|float} x
 * 
 * @return {String}
 * 
 */
function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

/**
 * Make input form edit to tags
 *
 * @param {array} selectorElements
 *  
 */
function makeInputFormEditToTags(selectorElements) {
    selectorElements.forEach((selectorElement) => {
        new Tagify(document.querySelector(selectorElement), {
            originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(',')
        });
    });
}

/**
 * @param {array} selectorElements
 *  
 */
function makeInputFormEditAsFloat(selectorElements) {
    selectorElements.forEach((selectorElement) => {
        new Cleave(selectorElement, {
            numeral: true,
            numeralThousandsGroupStyle: 'thousand'
        });
    });
}

/**
 * @param {array} selectorElements
 *  
 */
function makeImageCanViewerAsZoom(selectorElements) {
    selectorElements.forEach((selectorElement) => {
        new Viewer(document.querySelector(selectorElement));
    });
}

/**
 * Set image preview input file
 * 
 */
function setImagePreviewInputFile(clickedElementOrSelectorTargetPreviewChange, selectorInputFileElement) {
    const inputFileElement = document.querySelector(selectorInputFileElement);

    /**
     * Clicking element
     * 
     */
    inputFileElement.click();

    /**
     * Change image preview when input file is changed
     * 
     */
    inputFileElement.addEventListener('change', function() {
        if (typeof clickedElementOrSelectorTargetPreviewChange == 'object' && clickedElementOrSelectorTargetPreviewChange.tagName == 'IMG') {
            clickedElementOrSelectorTargetPreviewChange.setAttribute('src', URL.createObjectURL(inputFileElement.files[0]));
        } else if (typeof clickedElementOrSelectorTargetPreviewChange == 'string') {
            document.querySelector(clickedElementOrSelectorTargetPreviewChange).setAttribute('src', URL.createObjectURL(inputFileElement.files[0]));
        }
    });
}