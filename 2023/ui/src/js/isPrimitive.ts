/**
 *
 * 检测原始数据类型
 */


export const isPrimitive = object =>
  typeof object === 'string' ||
  typeof object === 'number' ||
  typeof object === 'symbol' ||
  typeof object === 'boolean'
export const __isPrimitive__ = {
  description: "检测原始数据类型",

}

