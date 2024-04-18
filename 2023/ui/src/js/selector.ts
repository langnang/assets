/**
 * 元素选择器
 * @param {String} el
 */
export const selector = el => document.querySelector(el)

export const __selector__ = {
  name: "selector(el)",
  description: "元素选择器",
  params: [
    {
      name: "el",
      description: "标签元素",
      type: "String"
    }
  ]
}


/**
 * @name jQuery
 * @desc 封装jQuery的选择器，若使用document.querySelector即可实现
 * @param {String} el 
 * @todo 实现了单一选择器部分功能，需要继续完善
 */
const jQuery = (el) => {
  const selector = {
    id: /^#/,
    class: /^\./,
    tag: /^[a-zA-Z]/,
    attr: /^\[[a-zA-Z0-9]+=/,

  }
  if (selector.id.test(el)) return jQueryById(el.replace(selector.id, ""));
  if (selector.class.test(el)) return jQueryByClassName(el.replace(selector.class, ""));
  if (selector.tag.test(el)) return jQueryByTagName(el);
  if (selector.attr.test(el)) {
    el = el.replace(selector.attr, "");
    el = el.replace(/\]$/, "");
    return jQueryByName(el);
  };

}

/**
 * @name jQueryById
 * @desc ID选择器
 * @param {String} el 
 */
const jQueryById = (el) => {
  return document.getElementById(el);

}
/**
 * @name jQueryByName
 * @desc name属性选择器
 * @param {String} el 
 */
const jQueryByName = (el) => {
  console.log(el);
  return document.getElementsByName(el);
}
/**
 * @name jQueryByClassName
 * @desc 类选择器
 * @param {String} el 
 */
const jQueryByClassName = (el) => {
  return document.getElementsByClassName(el);
}
/**
 * @name jQueryByTagName
 * @desc 标签选择器
 * @param {*} el 
 */
const jQueryByTagName = (el) => {
  return document.getElementsByTagName(el);
}

 // export const $ = jQuery;