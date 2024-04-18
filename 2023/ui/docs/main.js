const styleSheet = ln.getCssStyleSheets('ln.css')[0];
console.log(styleSheet);
const cssRules = styleSheet.cssRules
console.log(cssRules);
/**
 * 获取匹配的类名
 * @param {*} name 
 * @returns 
 */
const getMatchCssRules = (name) => cssRules.filter((rule) => new RegExp(`^\.ln-${name}`).test(rule.selectorText) && !/:/.test(rule.selectorText))

const app = document.getElementById("app");

// const rules = ln.getCssStyleRules(styleSheet, "^.red")[0]
// console.log(rules);
