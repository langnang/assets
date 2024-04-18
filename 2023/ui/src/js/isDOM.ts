/**
 * 检测DOM
 * @param {*} el
 */

import { objectType } from "./objectType";
export const isDOM = (obj) =>
  objectType(HTMLElement) === "object"
    ? obj instanceof HTMLElement
    : obj &&
    objectType(obj) === "object" &&
    obj.nodetypeOf === 1 &&
    objectType(obj.nodeName) === "string";
export const __isDOM__ = {
  description: "检测DOM",

}

