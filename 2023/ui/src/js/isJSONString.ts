import { objectType } from "./objectType";
/**
 * 检测JSON字符串
 * @param {String} str
 */
export const isJSONString = (jsonString: string) => {
  try {
    if (objectType(JSON.parse(jsonString)) == "object") {
      return true;
    }
  } catch (e) {
  }
  return false;
}

export const __isJSONString__ = {
  description: "检测JSON字符串",

}

