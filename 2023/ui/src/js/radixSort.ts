/**
 * 基数排序适用于：
 *  (1)数据范围较小，建议在小于1000
 *  (2)每个数值都要大于等于0
 * @author xiazdong
 * @param  array 待排序数组
 * @param  maxDigit 最大位数
 */
export const radixSort = (array: number[]) => {
  const maxDigit = (num, digit = 1) => {
    if (num <= -10 || num >= 10) {
      digit = maxDigit(num / 10, ++digit);
    }
    return digit;
  }
  let digit = maxDigit(Math.max(...array));
  var mod = 10;
  var dev = 1;
  var counter = [];
  for (var i = 0; i < digit; i++, dev *= 10, mod *= 10) {
    for (var j = 0; j < array.length; j++) {
      var bucket = parseInt((array[j] % mod) / dev);
      if (counter[bucket] == null) {
        counter[bucket] = [];
      }
      counter[bucket].push(array[j]);
    }
    var pos = 0;
    for (var j = 0; j < counter.length; j++) {
      var value = null;
      if (counter[j] != null) {
        while ((value = counter[j].shift()) != null) {
          array[pos++] = value;
        }
      }
    }
  }
  return array;
}
export const __radixSort__ = {
  description: "基数排序",

}

