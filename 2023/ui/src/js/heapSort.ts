/**
 * 堆排序
 * @param array 
 * @returns 
 */
export const heapSort = array => {
  function maxHeapify(array, index, heapSize) {
    var iMax,
      iLeft,
      iRight;
    while (true) {
      iMax = index;
      iLeft = 2 * index + 1;
      iRight = 2 * (index + 1);
      // 如果有左子树,且左子树大于父节点,则将最大指针指向左子树
      if (iLeft < heapSize && array[index] < array[iLeft]) {
        iMax = iLeft;
      }
      // 如果有右子树,且右子树大于父节点,则将最大指针指向右子树
      if (iRight < heapSize && array[iMax] < array[iRight]) {
        iMax = iRight;
      }
      // 如果父节点不是最大值,则将父节点与最大值交换,并且递归调整与父节点交换的位置
      if (iMax != index) {
        [array[iMax], array[index]] = [array[index], array[iMax]];
        index = iMax;
      } else {
        break;
      }
    }
  }

  function buildMaxHeap(array) {
    // 从最后一个非叶子节点开始向上构造最大堆
    for (let i = Math.floor(array.length / 2) - 1; i >= 0; i--) {
      maxHeapify(array, i, array.length);
    }
  }
  buildMaxHeap(array);
  for (var i = array.length - 1; i > 0; i--) {
    // 堆顶元素与最后一项元素交换位置
    [array[0], array[i]] = [array[i], array[0]];
    // 调整新堆
    maxHeapify(array, 0, i);
  }
  return array;

}

export const __heapSort__ = {
  description: "堆排序",

}

