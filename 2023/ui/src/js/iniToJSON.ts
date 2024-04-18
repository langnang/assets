/**
 * ini 转换为 JSON
 * @param {String} iniString
 */
export const iniToJSON = (iniString: string) => {
  const nodeArray = iniString.split("[");
  return nodeArray.reduce((total: any, value: string) => {
    const node: string = getNode(value);
    const key_value: any = getKeyValue(value);
    if (node == "") {
      return { ...total, ...key_value };
    } else {
      total[node] = key_value;
      return total;
    }
  }, {})
}

// 节点
const getNode = (str: string) => {
  let node = str.substring(str.indexOf("["), str.indexOf("]"));
  return node;
}

// 键值对
const getKeyValue = (str: string) => {
  let array = str.substring(str.indexOf("]") + 1).split(/[\r\n]/g);
  return array.reduce((total: any, value: string) => {
    let spt = value.split("=");
    if (spt.length == 1) {
      return total;
    }
    total[spt[0].replace(/(^\s*)|(\s*$)/g, "")] = spt[1].replace(/(^\s*)|(\s*$)/g, "");
    return total;
  }, {})

}

export const __iniToJSON__ = {
  description: "ini 转换为 JSON",

}
