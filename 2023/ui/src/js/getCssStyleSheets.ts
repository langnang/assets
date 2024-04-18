/**
 * 获取样式表
 * @param {String} sheetName 
 * @returns 
 */
export const getCssStyleSheets = (sheetName: string = '') => [...document.styleSheets].filter((sheet) => new RegExp(sheetName).test(sheet.href))

export const __getCssStyleSheets__ = {
  name: "getCssStyleSheets([sheetName])",
  description: "获取样式表",
  params: [
    {
      name: "sheetName",
      description: "样式表文件名",
      type: "String",
    }
  ]
}