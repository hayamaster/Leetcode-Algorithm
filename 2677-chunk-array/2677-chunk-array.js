/**
 * @param {Array} arr
 * @param {number} size
 * @return {Array}
 */
var chunk = function(arr, size) {
    let tempArr = [];
    const result = [];
    
    if (arr.length === 0)
        return [];

    for(let i = 0; i < arr.length; i++){
        if (i % size === 0 && i !== 0) {
            result.push(tempArr);
            tempArr = [];
        }
        tempArr.push(arr[i]);
    }
    result.push(tempArr)
    
    return result;
};
