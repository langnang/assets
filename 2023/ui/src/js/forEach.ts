/**
 * 遍历对象
 * @param {Object} obj 
 * @param {Function} callback 
 */
export const forEach = (obj: object, callback: any) => {
  for (let key in obj) {
    callback(obj[key], key);
  }
}

export const __forEach__ = {
  description: "遍历对象",
  params: [
    {
      name: 'obj',
      description: "需要遍历的对象",
      type: 'Object',
      default: null
    }
  ],
}