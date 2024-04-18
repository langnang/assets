/**
 * 检测指定的元素在视区中是否可见
 * @param {*} el 
 * @param {*} partiallyVisible 
 */
export const isVisibleinViewport = (el, partiallyVisible = false) => {
  const {
    top,
    left,
    bottom,
    right
  } = el.getBoundingClientRect();
  return partiallyVisible ?
    ((top > 0 && top < innerHeight) || (bottom > 0 && bottom < innerHeight)) &&
    ((left > 0 && left < innerWidth) || (right > 0 && right < innerWidth)) :
    top >= 0 && left >= 0 && bottom <= innerHeight && right <= innerWidth;
};
export const __isVisibleinViewport__ = {
  description: "检测指定的元素在视区中是否可见",

}

