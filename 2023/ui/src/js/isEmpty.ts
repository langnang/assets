
import { isNull, } from './isNull';
import { isUndefined } from './isUndefined';
/**
 * 检测为空
 * @param {*} object 
 */
export const isEmpty = object => isNull(object) || isUndefined(object)
export const __isEmpty__ = {
  description: "检测为空",

}

