/**
 * 混合属性到目标对象
 */
export const extend = (to, _from) => {
  for (var key in _from) {
    to[key] = _from[key];
  }
  return to
}
export const __extend__ = {
  description: "混合属性到目标对象",

}

