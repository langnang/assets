/**
 * 快速排序
 * @param {Array} arr 
 * @returns {Array} 
 */
export const quickSort = arr => {
  // 引用传递
  let _arr = arr.slice(0);
  // 内存溢出
  if (_arr.length <= 1) return _arr;
  // 初始化基值，左侧（小于基值）数组，右侧（大于基值）数组
  let [pivot, left, right] = [
    _arr.splice(Math.floor(_arr.length / 2), 1)[0],
    [],
    []
  ];
  // 遍历比较每个元素值与基值，分类push至左右数组
  for (let i = 0; i < _arr.length; i++) {
    _arr[i] <= pivot ? left.push(_arr[i]) : right.push(_arr[i]);
  }
  // 递归
  return quickSort(left).concat(pivot, ...quickSort(right));
}
export const __quickSort__ = {
  description: "快速排序",

}

