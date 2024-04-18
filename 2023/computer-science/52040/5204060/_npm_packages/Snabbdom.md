<h1>Snabbdom</h1>

[TOC]

# Snabbdom 介绍

> 虚拟 DOM 库
> Virtual DOM 建立在 DOM 之上，是基于 DOM 的一层抽象，实际可理解为用更轻量的纯 JavaScript 对象（树）描述 DOM（树）。

## 代码结构

```
├── h.ts 创建 VNode
├── helpers
│   └── attachto.ts
├── hooks.ts 生命周期/钩子
├── htmldomapi.ts DOM API 映射
├── is.ts
├── modules 模块代码
│   ├── attributes.ts 操作属性的模块
│   ├── class.ts 操作 class 的模块
│   ├── dataset.ts  操作 dataset 的模块
│   ├── eventlisteners.ts 操作事件的模块
│   ├── hero.ts 某个展示特定动效的模块(用于 example 展示，可不用理会)
│   ├── module.ts 模块的定义
│   ├── props.ts 操作 props 的模块
│   └── style.ts 操作 style 的模块
├── snabbdom.bundle.ts
├── snabbdom.ts 核心代码
├── thunk.ts
├── tovnode.ts 转换真实 DOM 节点至 VNode
└── vnode.ts VNode 定义
```

## 模块 Module

### attributes.ts

> 从 elm 的属性中删除 vnode 中不存在的属性（包括那些 boolean 类属性，如果新 vnode 设置为 false，同样删除）
> 如果 oldvnode 与 vnode 用同名属性，则在 elm 上更新对应属性值
> 如果 vnode 有新属性，则添加到 elm 中
> 如果存在命名空间，则用 setAttributeNS 设置


2.1 attributes.ts
      主要功能如下：
     从elm的属性中删除vnode中不存在的属性（包括那些boolean类属性，如果新vnode设置为false，同样删除）
     如果oldvnode与vnode用同名属性，则在elm上更新对应属性值
     如果vnode有新属性，则添加到elm中
    如果存在命名空间，则用setAttributeNS设置

import {VNode, VNodeData} from '../vnode';
import {Module} from './module';
 
// 全局类型声明里的名称将被引入整个 TypeScript 全局命名空间中，从引用这个 声明文件起就可以自由使用。
declare global {
  interface Element {
    setAttribute(name: string, value: string | number | boolean): void;
    setAttributeNS(namespaceURI: string, qualifiedName: string, value: string | number | boolean): void;
  }
}
 
export type Attrs = Record<string, string | number | boolean>
 
const xlinkNS = 'http://www.w3.org/1999/xlink';
const xmlNS = 'http://www.w3.org/XML/1998/namespace';
const colonChar = 58;
const xChar = 120;
 
function updateAttrs(oldVnode: VNode, vnode: VNode): void {
  var key: string, elm: Element = vnode.elm as Element,
      oldAttrs = (oldVnode.data as VNodeData).attrs,
      attrs = (vnode.data as VNodeData).attrs;
    //如果旧节点和新节点都不包含属性，立刻返回
  if (!oldAttrs && !attrs) return;
  if (oldAttrs === attrs) return;
  oldAttrs = oldAttrs || {};
  attrs = attrs || {};
 
  // update modified attributes, add new attributes
  // 更新改变了的属性，添加新的属性
  for (key in attrs) {
    const cur = attrs[key];
    const old = oldAttrs[key];
    //如果旧的属性和新的属性不同
    if (old !== cur) {
        //如果是boolean类属性，当vnode设置为falsy value时，直接删除，而不是更新值
      if (cur === true) {
        elm.setAttribute(key, "");
      } else if (cur === false) {
        elm.removeAttribute(key);
      } else {
        if (key.charCodeAt(0) !== xChar) {
          elm.setAttribute(key, cur);
        } else if (key.charCodeAt(3) === colonChar) {
          // Assume xml namespace
          elm.setAttributeNS(xmlNS, key, cur);
        } else if (key.charCodeAt(5) === colonChar) {
          // Assume xlink namespace
          elm.setAttributeNS(xlinkNS, key, cur);
        } else {
          elm.setAttribute(key, cur);
        }
      }
    }
  }
  // remove removed attributes
  // use `in` operator since the previous `for` iteration uses it (.i.e. add even attributes with undefined value)
  // the other option is to remove all attributes with value == undefined
    //删除不在新节点属性中的旧节点的属性
  for (key in oldAttrs) {
    if (!(key in attrs)) {
      elm.removeAttribute(key);
    }
  }
}
 
export const attributesModule = {create: updateAttrs, update: updateAttrs} as Module;
export default attributesModule;
2.2 class.ts
      主要功能如下：
       从elm中删除vnode中不存在的或者值为false的类 将vnode中新的class添加到elm上去

       

import {VNode, VNodeData} from '../vnode';
import {Module} from './module';
 
export type Classes = Record<string, boolean>
 
 
/*从elm中删除vnode中不存在的或者值为false的类
将vnode中新的class添加到elm上去*/
 
function updateClass(oldVnode: VNode, vnode: VNode): void {
  var cur: any, name: string, elm: Element = vnode.elm as Element,
      oldClass = (oldVnode.data as VNodeData).class,
      klass = (vnode.data as VNodeData).class;
  //如果旧节点和新节点都没有class，直接返回
  if (!oldClass && !klass) return;
    //如果旧节点和新节点都有class，直接返回
  if (oldClass === klass) return;
  oldClass = oldClass || {};
  klass = klass || {};
 
  //从旧节点中删除新节点不存在的类
  for (name in oldClass) {
    if (!klass[name]) {
      elm.classList.remove(name);
    }
  }
 
  //如果新节点中对应旧节点的类设置为false，则删除该类，如果新设置为true，则添加该类
  for (name in klass) {
    cur = klass[name];
    if (cur !== oldClass[name]) {
      (elm.classList as any)[cur ? 'add' : 'remove'](name);
    }
  }
}
 
export const classModule = {create: updateClass, update: updateClass} as Module;
export default classModule;
2.3 dataset.ts
      主要功能如下：
     从elm中删除vnode不存在的属性集中的属性 更新属性集中的属性值

import {VNode, VNodeData} from '../vnode';
import {Module} from './module';
 
export type Dataset = Record<string, string>;
 
const CAPS_REGEX = /[A-Z]/g;
 
/*dataset
主要功能如下：从elm中删除vnode不存在的属性集中的属性
更新属性集中的属性值
*/
 
function updateDataset(oldVnode: VNode, vnode: VNode): void {
  let elm: HTMLElement = vnode.elm as HTMLElement,
    oldDataset = (oldVnode.data as VNodeData).dataset,
    dataset = (vnode.data as VNodeData).dataset,
    key: string;
    //如果新旧节点都没数据集，则直接返回
  if (!oldDataset && !dataset) return;
  if (oldDataset === dataset) return;
  oldDataset = oldDataset || {};
  dataset = dataset || {};
  const d = elm.dataset;
  //删除旧节点中在新节点不存在的数据集
  for (key in oldDataset) {
    if (!dataset[key]) {
      if (d) {
        if (key in d) {
          delete d[key];
        }
      } else {
        elm.removeAttribute('data-' + key.replace(CAPS_REGEX, '-$&').toLowerCase());
      }
    }
  }
  //更新数据集
  for (key in dataset) {
    if (oldDataset[key] !== dataset[key]) {
      if (d) {
        d[key] = dataset[key];
      } else {
        elm.setAttribute('data-' + key.replace(CAPS_REGEX, '-$&').toLowerCase(), dataset[key]);
      }
    }
  }
}
 
export const datasetModule = {create: updateDataset, update: updateDataset} as Module;
export default datasetModule;
2.4 eventlisteners.ts
     snabbdom中对事件处理做了一层包装，真实DOM的事件触发的是对vnode的操作 ,主要途径是 createListner => 返回handler作事件监听生成器 =>handler上绑定vnode =>将handler作真实DOM的事件处理器 ,真实DOM事件触发后 => handler获得真实DOM的事件对象 => 将真实DOM事件对象传入handleEvent => handleEvent找到 //对应的vnode事件处理器，然后调用这个处理器从而修改vnode

import {VNode, VNodeData} from '../vnode';
import {Module} from './module';
 
export type On = {
  [N in keyof HTMLElementEventMap]?: (ev: HTMLElementEventMap[N]) => void
} & {
  [event: string]: EventListener
};
 
//snabbdom中对事件处理做了一层包装，真实DOM的事件触发的是对vnode的操作
//主要途径是
// createListner => 返回handler作事件监听生成器 =>handler上绑定vnode =>将handler作真实DOM的事件处理器
//真实DOM事件触发后 => handler获得真实DOM的事件对象 => 将真实DOM事件对象传入handleEvent => handleEvent找到
//对应的vnode事件处理器，然后调用这个处理器从而修改vnode
 
//对vnode进行事件处理
 
function invokeHandler(handler: any, vnode?: VNode, event?: Event): void {
  if (typeof handler === "function") {
    // call function handler
    //将事件处理器在vnode上调用
    handler.call(vnode, event, vnode);
  } //存在事件绑定数据或者存在多事件处理器
  else if (typeof handler === "object") {
    //说明只有一个事件处理器
    if (typeof handler[0] === "function") {
     //如果绑定数据只有一个，则直接将数据用call的方式调用，提高性能
     //形如on:{click:[handler,1]}
      if (handler.length === 2) {
        handler[0].call(vnode, handler[1], event, vnode);
      }
      //如果存在多个绑定数据，则要转化为数组，用apply的方式调用，而apply性能比call差
      //形如:on:{click:[handler,1,2,3]}
      else {
        //如果存在多个相同事件的不同处理器，则递归调用
        // 如on：{click:[[handeler1,1],[handler,2]]}
        var args = handler.slice(1);
        args.push(event);
        args.push(vnode);
        handler[0].apply(vnode, args);
      }
    } else {
      // call multiple handlers
      for (var i = 0; i < handler.length; i++) {
        invokeHandler(handler[i]);
      }
    }
  }
}
/**
 *
 * @param event 真实dom的事件对象
 * @param vnode
 */
function handleEvent(event: Event, vnode: VNode) {
  var name = event.type,
      on = (vnode.data as VNodeData).on;
 
  // 如果找到对应的vnode事件处理器，则调用
  if (on && on[name]) {
    invokeHandler(on[name], vnode, event);
  }
}
//事件监听器生成器，用于处理真实DOM事件
function createListener() {
  return function handler(event: Event) {
    handleEvent(event, (handler as any).vnode);
  }
}
//更新事件监听
function updateEventListeners(oldVnode: VNode, vnode?: VNode): void {
  var oldOn = (oldVnode.data as VNodeData).on,
      oldListener = (oldVnode as any).listener,
      oldElm: Element = oldVnode.elm as Element,
      on = vnode && (vnode.data as VNodeData).on,
      elm: Element = (vnode && vnode.elm) as Element,
      name: string;
 
    // optimization for reused immutable handlers
    //如果新旧事件监听器一样，则直接返回
  if (oldOn === on) {
    return;
  }
 
  // remove existing listeners which no longer used
    //如果新节点上没有事件监听，则将旧节点上的事件监听都删除
  if (oldOn && oldListener) {
    // if element changed or deleted we remove all existing listeners unconditionally
    if (!on) {
      for (name in oldOn) {
        // remove listener if element was changed or existing listeners removed
       //删除旧节点中新节点不存在的事件监听
        oldElm.removeEventListener(name, oldListener, false);
      }
    } else {
      for (name in oldOn) {
        // remove listener if existing listener removed
        if (!on[name]) {
          oldElm.removeEventListener(name, oldListener, false);
        }
      }
    }
  }
 
  // add new listeners which has not already attached
  if (on) {
    // reuse existing listener or create new
      // 如果oldvnode上已经有listener，则vnode直接复用，否则则新建事件处理器
    var listener = (vnode as any).listener = (oldVnode as any).listener || createListener();
    // update vnode for listener
    //在事件处理器上绑定vnode
    listener.vnode = vnode;
 
    // if element changed or added we add all needed listeners unconditionally
   //如果oldvnode上没有事件处理器
    if (!oldOn) {
      for (name in on) {
        // add listener if element was changed or new listeners added
       //直接将vnode上的事件处理器添加到elm上
        elm.addEventListener(name, listener, false);
      }
    } else {
      for (name in on) {
        // add listener if new listener added
        //否则添加oldvnode上没有的事件处理器
        if (!oldOn[name]) {
          elm.addEventListener(name, listener, false);
        }
      }
    }
  }
}
 
export const eventListenersModule = {
  create: updateEventListeners,
  update: updateEventListeners,
  destroy: updateEventListeners
} as Module;
export default eventListenersModule;
2.5 props.ts
    从elm上删除vnode中不存在的属性 更新elm上的属性

import {VNode, VNodeData} from '../vnode';
import {Module} from './module';
 
export type Props = Record<string, any>;
/*props
主要功能：
  从elm上删除vnode中不存在的属性
  更新elm上的属性
*/
function updateProps(oldVnode: VNode, vnode: VNode): void {
  var key: string, cur: any, old: any, elm = vnode.elm,
      oldProps = (oldVnode.data as VNodeData).props,
      props = (vnode.data as VNodeData).props;
 
    //如果新旧节点都不存在属性，则直接返回
  if (!oldProps && !props) return;
  if (oldProps === props) return;
  oldProps = oldProps || {};
  props = props || {};
  //删除旧节点中新节点没有的属性
  for (key in oldProps) {
    if (!props[key]) {
      delete (elm as any)[key];
    }
  }
  //更新属性
  for (key in props) {
    cur = props[key];
    old = oldProps[key];
      //如果新旧节点属性不同，且对比的属性不是value或者elm上对应属性和新属性也不同，那么就需要更新
    if (old !== cur && (key !== 'value' || (elm as any)[key] !== cur)) {
      (elm as any)[key] = cur;
    }
  }
}
 
export const propsModule = {create: updateProps, update: updateProps} as Module;
export default propsModule;
2.6 style.ts
    将elm上存在于oldvnode中但不存在于vnode中不存在的style置空 如果vnode.style中的delayed与oldvnode的不同，则更新delayed的属性值，并在下一帧将elm的style设置为该值，从而实现动画过渡效果 非delayed和remove的style直接更新 vnode被destroy时，直接将对应style更新为vnode.data.style.destory的值 vnode被reomve时，如果style.remove不存在，直接调用全局remove钩子进入下一个remove过程 如果style.remove存在，那么我们就需要设置remove动画过渡效果，等到过渡效果结束之后，才调用 下一个remove过程

import {VNode, VNodeData} from '../vnode';
import {Module} from './module';
 
export type VNodeStyle = Record<string, string> & {
  delayed?: Record<string, string>
  remove?: Record<string, string>
}
 
 
/*主要功能如下：
将elm上存在于oldvnode中但不存在于vnode中不存在的style置空
如果vnode.style中的delayed与oldvnode的不同，则更新delayed的属性值，并在下一帧将elm的style设置为该值，从而实现动画过渡效果
非delayed和remove的style直接更新
vnode被destroy时，直接将对应style更新为vnode.data.style.destory的值
vnode被reomve时，如果style.remove不存在，直接调用全局remove钩子进入下一个remove过程
如果style.remove存在，那么我们就需要设置remove动画过渡效果，等到过渡效果结束之后，才调用
下一个remove过程*/
 
 
//如果存在requestAnimationFrame，则直接使用，以优化性能，否则用setTimeout
var raf = (typeof window !== 'undefined' && window.requestAnimationFrame) || setTimeout;
var nextFrame = function(fn: any) { raf(function() { raf(fn); }); };
var reflowForced = false;
 
 
//通过nextFrame来实现动画效果
function setNextFrame(obj: any, prop: string, val: any): void {
  nextFrame(function() { obj[prop] = val; });
}
 
function updateStyle(oldVnode: VNode, vnode: VNode): void {
  var cur: any, name: string, elm = vnode.elm,
      oldStyle = (oldVnode.data as VNodeData).style,
      style = (vnode.data as VNodeData).style;
  //如果oldvnode和vnode都没有style，直接返回
  if (!oldStyle && !style) return;
  if (oldStyle === style) return;
  oldStyle = oldStyle || {} as VNodeStyle;
  style = style || {} as VNodeStyle;
  var oldHasDel = 'delayed' in oldStyle;
    //遍历oldvnode的style
  for (name in oldStyle) {
    if (!style[name]) {
      if (name[0] === '-' && name[1] === '-') {
        (elm as any).style.removeProperty(name);
      } else {
          //如果vnode中无该style，则置空
        (elm as any).style[name] = '';
      }
    }
  }
  //如果vnode的style中有delayed且与oldvnode中的不同，则在下一帧设置delayed的参数
  for (name in style) {
    cur = style[name];
    if (name === 'delayed' && style.delayed) {
      for (let name2 in style.delayed) {
        cur = style.delayed[name2];
        if (!oldHasDel || cur !== (oldStyle.delayed as any)[name2]) {
          setNextFrame((elm as any).style, name2, cur);
        }
      }
        //如果不是delayed和remove的style，且不同于oldvnode的值，则直接设置新值
    } else if (name !== 'remove' && cur !== oldStyle[name]) {
      if (name[0] === '-' && name[1] === '-') {
        (elm as any).style.setProperty(name, cur);
      } else {
 
        (elm as any).style[name] = cur;
      }
    }
  }
}
//设置节点被destory时的style
function applyDestroyStyle(vnode: VNode): void {
  var style: any, name: string, elm = vnode.elm, s = (vnode.data as VNodeData).style;
  if (!s || !(style = s.destroy)) return;
  for (name in style) {
    (elm as any).style[name] = style[name];
  }
}
//删除效果，当我们删除一个元素时，先回调用删除过度效果，过渡完才会将节点remove
function applyRemoveStyle(vnode: VNode, rm: () => void): void {
  var s = (vnode.data as VNodeData).style;
    //如果没有style或没有style.remove
  if (!s || !s.remove) {
      //直接调用rm，即实际上是调用全局的remove钩子
    rm();
    return;
  }
  if(!reflowForced) {
    getComputedStyle(document.body).transform;
    reflowForced = true;
  }
  var name: string, elm = vnode.elm, i = 0, compStyle: CSSStyleDeclaration,
      style = s.remove, amount = 0, applied: Array<string> = [];
    //设置并记录remove动作后删除节点前的样式
  for (name in style) {
    applied.push(name);
    (elm as any).style[name] = style[name];
  }
  compStyle = getComputedStyle(elm as Element);
    //拿到所有需要过渡的属性
  var props = (compStyle as any)['transition-property'].split(', ');
    //对过渡属性计数，这里applied.length >=amount，因为有些属性是不需要过渡的
  for (; i < props.length; ++i) {
    if(applied.indexOf(props[i]) !== -1) amount++;
  }
    //当过渡效果的完成后，才remove节点，调用下一个remove过程
  (elm as Element).addEventListener('transitionend', function (ev: TransitionEvent) {
    if (ev.target === elm) --amount;
    if (amount === 0) rm();
  });
}
 
function forceReflow() {
  reflowForced = false;
}
 
export const styleModule = {
  pre: forceReflow,
  create: updateStyle,
  update: updateStyle,
  destroy: applyDestroyStyle,
  remove: applyRemoveStyle
} as Module;
export default styleModule;
3、snabbdom.ts

/* global module, document, Node */
import {Module} from './modules/module';
import {Hooks} from './hooks';
import vnode, {VNode, VNodeData, Key} from './vnode';
import * as is from './is';
import htmlDomApi, {DOMAPI} from './htmldomapi';
 
function isUndef(s: any): boolean { return s === undefined; }
function isDef(s: any): boolean { return s !== undefined; }
 
type VNodeQueue = Array<VNode>;
 
const emptyNode = vnode('', {}, [], undefined, undefined);
 
//这个函数主要用于比较oldvnode与vnode同层次节点的比较，如果同层次节点的key和sel都相同
// 我们就可以保留这个节点，否则直接替换节点
function sameVnode(vnode1: VNode, vnode2: VNode): boolean {
  return vnode1.key === vnode2.key && vnode1.sel === vnode2.sel;
}
 
function isVnode(vnode: any): vnode is VNode {
  return vnode.sel !== undefined;
}
 
type KeyToIndexMap = {[key: string]: number};
 
type ArraysOf<T> = {
  [K in keyof T]: (T[K])[];
}
 
type ModuleHooks = ArraysOf<Module>;
//这个函数的功能十分简单，就是将oldvnode数组中位置对oldvnode.key的映射转换为oldvnode.key对位置的映射
function createKeyToOldIdx(children: Array<VNode>, beginIdx: number, endIdx: number): KeyToIndexMap {
  let i: number, map: KeyToIndexMap = {}, key: Key | undefined, ch;
  for (i = beginIdx; i <= endIdx; ++i) {
    ch = children[i];
    if (ch != null) {
      key = ch.key;
      if (key !== undefined) map[key] = i;
    }
  }
  return map;
}
 
/*
pre	patch开始时触发
init	vnode被创建时触发
create	vnode转换为真实DOM节点时触发
insert	插入到DOM树时触发
prepatch	元素准备patch前触发
update	元素更新时触发
postpatch	元素patch完触发
destroy	元素被删除时触发
remove	元素从父节点删除时触发，和destory略有不同，remove只影响到被移除节点中最顶层的节点
post	patch完成后触发
create => style,class,dataset,eventlistener,props,hero
update => style,class,dataset,eventlistener,props,hero
remove => style
destory => eventlistener,style,hero
pre => hero
post => hero
*/
const hooks: (keyof Module)[] = ['create', 'update', 'remove', 'destroy', 'pre', 'post'];
 
export {h} from './h';
export {thunk} from './thunk';
 
/*
init函数有两个参数modules和api，其中modules是init依赖的模块，如attribute、props
、eventlistener这些模块,api则是对封装真实DOM操作的工具函数库，如果我们没有传入，则默认
使用snabbdom提供的htmldomapi。init还包含了许多vnode和真实DOM之间的操作和注册全局钩子，
还有patchVnode和updateChildren这两个重要功能，然后返回一个patch函数
*/
export function init(modules: Array<Partial<Module>>, domApi?: DOMAPI) {
  let i: number, j: number, cbs = ({} as ModuleHooks);
 
  const api: DOMAPI = domApi !== undefined ? domApi : htmlDomApi;
  //注册钩子的回调，在发生状态变更时，触发对应属性变更
  for (i = 0; i < hooks.length; ++i) {
    cbs[hooks[i]] = [];
    for (j = 0; j < modules.length; ++j) {
      const hook = modules[j][hooks[i]];
      if (hook !== undefined) {
        (cbs[hooks[i]] as Array<any>).push(hook);
      }
    }
  }
/*
   这个函数主要的功能是将一个真实DOM节点转化成vnode形式，
   如<div id='a' class='b c'></div>将转换为{sel:'div#a.b.c',data:{},children:[],text:undefined,elm:<div id='a' class='b c'>}
*/
  function emptyNodeAt(elm: Element) {
    const id = elm.id ? '#' + elm.id : '';
    const c = elm.className ? '.' + elm.className.split(' ').join('.') : '';
    return vnode(api.tagName(elm).toLowerCase() + id + c, {}, [], undefined, elm);
  }
/*
   我们知道当我们需要remove一个vnode时，会触发remove钩子作拦截器，只有在所有remove钩子
    回调函数都触发完才会将节点从父节点删除，而这个函数提供的就是对remove钩子回调操作的计数功能
*/
  function createRmCb(childElm: Node, listeners: number) {
    return function rmCb() {
      if (--listeners === 0) {
        const parent = api.parentNode(childElm);
        api.removeChild(parent, childElm);
      }
    };
  }
/*
初始化vnode，调用init钩子
创建对应tagname的DOM element节点，并将vnode.sel中的id名和class名挂载上去
如果有子vnode，递归创建DOM element节点，并添加到父vnode对应的element节点上去，
否则如果有text属性，则创建text节点，并添加到父vnode对应的element节点上去
vnode转换成dom节点操作完成后，调用create钩子
如果vnode上有insert钩子，那么就将这个vnode放入insertedVnodeQueue中作记录，到时
再在全局批量调用insert钩子回调
*/
  function createElm(vnode: VNode, insertedVnodeQueue: VNodeQueue): Node {
    let i: any, data = vnode.data;
    if (data !== undefined) {
        //当节点上存在hook而且hook中有init钩子时，先调用init回调，对刚创建的vnode进行处理
      if (isDef(i = data.hook) && isDef(i = i.init)) {
        i(vnode);
          //获取init钩子修改后的数据
        data = vnode.data;
      }
    }
    let children = vnode.children, sel = vnode.sel;
    if (sel === '!') {
      if (isUndef(vnode.text)) {
        vnode.text = '';
      }
      vnode.elm = api.createComment(vnode.text as string);
    } else if (sel !== undefined) {
      // Parse selector
      const hashIdx = sel.indexOf('#');
      const dotIdx = sel.indexOf('.', hashIdx);
      const hash = hashIdx > 0 ? hashIdx : sel.length;
      const dot = dotIdx > 0 ? dotIdx : sel.length;
      const tag = hashIdx !== -1 || dotIdx !== -1 ? sel.slice(0, Math.min(hash, dot)) : sel;
      const elm = vnode.elm = isDef(data) && isDef(i = (data as VNodeData).ns) ? api.createElementNS(i, tag)
                                                                               : api.createElement(tag);
      if (hash < dot) elm.setAttribute('id', sel.slice(hash + 1, dot));
      if (dotIdx > 0) elm.setAttribute('class', sel.slice(dot + 1).replace(/\./g, ' '));
      for (i = 0; i < cbs.create.length; ++i) cbs.create[i](emptyNode, vnode);
      if (is.array(children)) {
        for (i = 0; i < children.length; ++i) {
          const ch = children[i];
          if (ch != null) {
            api.appendChild(elm, createElm(ch as VNode, insertedVnodeQueue));
          }
        }
      } else if (is.primitive(vnode.text)) {
        api.appendChild(elm, api.createTextNode(vnode.text));
      }
      i = (vnode.data as VNodeData).hook; // Reuse variable
      if (isDef(i)) {
        if (i.create) i.create(emptyNode, vnode);
        if (i.insert) insertedVnodeQueue.push(vnode);
      }
    } else {
      vnode.elm = api.createTextNode(vnode.text as string);
    }
    return vnode.elm;
  }
  //就是将vnode转换后的dom节点插入到dom树的指定位置中去
  function addVnodes(parentElm: Node,
                     before: Node | null,
                     vnodes: Array<VNode>,
                     startIdx: number,
                     endIdx: number,
                     insertedVnodeQueue: VNodeQueue) {
    for (; startIdx <= endIdx; ++startIdx) {
      const ch = vnodes[startIdx];
      if (ch != null) {
        api.insertBefore(parentElm, createElm(ch, insertedVnodeQueue), before);
      }
    }
  }
/*
这个函数用于手动触发destory钩子回调，主要步骤如下：
先调用vnode上的destory
再调用全局下的destory
递归调用子vnode的destory
*/
  function invokeDestroyHook(vnode: VNode) {
    let i: any, j: number, data = vnode.data;
    if (data !== undefined) {
      //先触发该节点上的destory回调
      if (isDef(i = data.hook) && isDef(i = i.destroy)) i(vnode);
      //在触发全局下的destory回调
      for (i = 0; i < cbs.destroy.length; ++i) cbs.destroy[i](vnode);
     //递归触发子节点的destory回调
      if (vnode.children !== undefined) {
        for (j = 0; j < vnode.children.length; ++j) {
          i = vnode.children[j];
          if (i != null && typeof i !== "string") {
            invokeDestroyHook(i);
          }
        }
      }
    }
  }
/*
   这个函数主要功能是批量删除DOM节点，需要配合invokeDestoryHook和createRmCb服用，效果更佳
    主要步骤如下：
   调用invokeDestoryHook以触发destory回调
    调用createRmCb来开始对remove回调进行计数
    删除DOM节点
*/
  function removeVnodes(parentElm: Node,
                        vnodes: Array<VNode>,
                        startIdx: number,
                        endIdx: number): void {
    for (; startIdx <= endIdx; ++startIdx) {
      let i: any, listeners: number, rm: () => void, ch = vnodes[startIdx];
      if (ch != null) {
        if (isDef(ch.sel)) {
          //调用destroy钩子
          invokeDestroyHook(ch);
          //对全局remove钩子进行计数
          listeners = cbs.remove.length + 1;
          rm = createRmCb(ch.elm as Node, listeners);
          //调用全局remove回调函数，并每次减少一个remove钩子计数
          for (i = 0; i < cbs.remove.length; ++i) cbs.remove[i](ch, rm);
          if (isDef(i = ch.data) && isDef(i = i.hook) && isDef(i = i.remove)) {
            i(ch, rm);
          } else {
              //如果没有内部remove钩子，需要调用rm，确保能够remove节点
            rm();
          }
        } else { // Text node
          api.removeChild(parentElm, ch.elm as Node);
        }
      }
    }
  }
 
  function updateChildren(parentElm: Node,
                          oldCh: Array<VNode>,
                          newCh: Array<VNode>,
                          insertedVnodeQueue: VNodeQueue) {
    let oldStartIdx = 0, newStartIdx = 0;
    let oldEndIdx = oldCh.length - 1;
    let oldStartVnode = oldCh[0];
    let oldEndVnode = oldCh[oldEndIdx];
    let newEndIdx = newCh.length - 1;
    let newStartVnode = newCh[0];
    let newEndVnode = newCh[newEndIdx];
    let oldKeyToIdx: any;
    let idxInOld: number;
    let elmToMove: VNode;
    let before: any;
 
    while (oldStartIdx <= oldEndIdx && newStartIdx <= newEndIdx) {
      if (oldStartVnode == null) {
        oldStartVnode = oldCh[++oldStartIdx]; // Vnode might have been moved left
      } else if (oldEndVnode == null) {
        oldEndVnode = oldCh[--oldEndIdx];
      } else if (newStartVnode == null) {
        newStartVnode = newCh[++newStartIdx];
      } else if (newEndVnode == null) {
        newEndVnode = newCh[--newEndIdx];
      }
      //如果旧头索引节点和新头索引节点相同，
      else if (sameVnode(oldStartVnode, newStartVnode)) {
          //对旧头索引节点和新头索引节点进行diff更新， 从而达到复用节点效果
        patchVnode(oldStartVnode, newStartVnode, insertedVnodeQueue);
        //旧头索引向后
        oldStartVnode = oldCh[++oldStartIdx];
        //新头索引向后
        newStartVnode = newCh[++newStartIdx];
      }
      //如果旧尾索引节点和新尾索引节点相似，可以复用
      else if (sameVnode(oldEndVnode, newEndVnode)) {
        //旧尾索引节点和新尾索引节点进行更新
        patchVnode(oldEndVnode, newEndVnode, insertedVnodeQueue);
         //旧尾索引向前
        oldEndVnode = oldCh[--oldEndIdx];
        //新尾索引向前
        newEndVnode = newCh[--newEndIdx];
      }
      //如果旧头索引节点和新头索引节点相似，可以通过移动来复用
      //如旧节点为【5,1,2,3,4】，新节点为【1,2,3,4,5】，如果缺乏这种判断，意味着
      //那样需要先将5->1,1->2,2->3,3->4,4->5五次删除插入操作，即使是有了key-index来复用，
      // 也会出现【5,1,2,3,4】->【1,5,2,3,4】->【1,2,5,3,4】->【1,2,3,5,4】->【1,2,3,4,5】
      // 共4次操作，如果有了这种判断，我们只需要将5插入到最后一次操作即可
      else if (sameVnode(oldStartVnode, newEndVnode)) { // Vnode moved right
        patchVnode(oldStartVnode, newEndVnode, insertedVnodeQueue);
        api.insertBefore(parentElm, oldStartVnode.elm as Node, api.nextSibling(oldEndVnode.elm as Node));
        oldStartVnode = oldCh[++oldStartIdx];
        newEndVnode = newCh[--newEndIdx];
      }
      // //原理与上面相同
      else if (sameVnode(oldEndVnode, newStartVnode)) { // Vnode moved left
        patchVnode(oldEndVnode, newStartVnode, insertedVnodeQueue);
        api.insertBefore(parentElm, oldEndVnode.elm as Node, oldStartVnode.elm as Node);
        oldEndVnode = oldCh[--oldEndIdx];
        newStartVnode = newCh[++newStartIdx];
      }
      //如果上面的判断都不通过，我们就需要key-index表来达到最大程度复用了
      else {
          //如果不存在旧节点的key-index表，则创建
        if (oldKeyToIdx === undefined) {
          oldKeyToIdx = createKeyToOldIdx(oldCh, oldStartIdx, oldEndIdx);
        }
          //找到新节点在旧节点组中对应节点的位置
        idxInOld = oldKeyToIdx[newStartVnode.key as string];
        if (isUndef(idxInOld)) { // New element
          api.insertBefore(parentElm, createElm(newStartVnode, insertedVnodeQueue), oldStartVnode.elm as Node);
          newStartVnode = newCh[++newStartIdx];
        } else {
            //如果新节点在就旧节点组中存在，先找到对应的旧节点
          elmToMove = oldCh[idxInOld];
          if (elmToMove.sel !== newStartVnode.sel) {
            api.insertBefore(parentElm, createElm(newStartVnode, insertedVnodeQueue), oldStartVnode.elm as Node);
          } else {
              //先将新节点和对应旧节点作更新
            patchVnode(elmToMove, newStartVnode, insertedVnodeQueue);
              //然后将旧节点组中对应节点设置为undefined,代表已经遍历过了，不在遍历，否则可能存在重复插入的问题
            oldCh[idxInOld] = undefined as any;
              //插入到旧头索引节点之前
            api.insertBefore(parentElm, (elmToMove.elm as Node), oldStartVnode.elm as Node);
          }
            //新头索引向后
          newStartVnode = newCh[++newStartIdx];
        }
      }
    }
    if (oldStartIdx <= oldEndIdx || newStartIdx <= newEndIdx) {
        //当旧头索引大于旧尾索引时，代表旧节点组已经遍历完，将剩余的新Vnode添加到最后一个新节点的位置后
      if (oldStartIdx > oldEndIdx) {
        before = newCh[newEndIdx+1] == null ? null : newCh[newEndIdx+1].elm;
        addVnodes(parentElm, before, newCh, newStartIdx, newEndIdx, insertedVnodeQueue);
      } else {
          //如果新节点组先遍历完，那么代表旧节点组中剩余节点都不需要，所以直接删除
        removeVnodes(parentElm, oldCh, oldStartIdx, oldEndIdx);
      }
    }
  }
 
  function patchVnode(oldVnode: VNode, vnode: VNode, insertedVnodeQueue: VNodeQueue) {
    let i: any, hook: any;
      //在patch之前，先调用vnode.data的prepatch钩子
    if (isDef(i = vnode.data) && isDef(hook = i.hook) && isDef(i = hook.prepatch)) {
      i(oldVnode, vnode);
    }
    const elm = vnode.elm = (oldVnode.elm as Node);
    let oldCh = oldVnode.children;
    let ch = vnode.children;
      //如果oldvnode和vnode的引用相同，说明没发生任何变化直接返回，避免性能浪费
    if (oldVnode === vnode) return;
      //如果oldvnode和vnode不同，说明vnode有更新
      //如果vnode和oldvnode不相似则直接用vnode引用的DOM节点去替代oldvnode引用的旧节点
    if (vnode.data !== undefined) {
      for (i = 0; i < cbs.update.length; ++i) cbs.update[i](oldVnode, vnode);
      i = vnode.data.hook;
        //如果vnode和oldvnode相似，那么我们要对oldvnode本身进行更新
      if (isDef(i) && isDef(i = i.update)) i(oldVnode, vnode);
    }
      // 如果新的 vnode 节点不是一个文本节点
    if (isUndef(vnode.text)) {
        // 如果两个 vnode 节点都有子节点
      if (isDef(oldCh) && isDef(ch)) {
          // @important 并且子节点不一样，开始 diff
        if (oldCh !== ch) updateChildren(elm, oldCh as Array<VNode>, ch as Array<VNode>, insertedVnodeQueue);
      } else if (isDef(ch)) {
          // 如果只有新的 vnode 有子节点，设置旧的 vnode 的内容为空
        if (isDef(oldVnode.text)) api.setTextContent(elm, '');
          // 添加插入新的 DOM 节点
        addVnodes(elm, null, ch as Array<VNode>, 0, (ch as Array<VNode>).length - 1, insertedVnodeQueue);
      } else if (isDef(oldCh)) {
          // 如果只有旧的 vnode 有子节点，则移除所有子节点
        removeVnodes(elm, oldCh as Array<VNode>, 0, (oldCh as Array<VNode>).length - 1);
      } else if (isDef(oldVnode.text)) {
          // 如果旧 vnode 是个文本节点，并且新 vnode 也没有子节点，则清空旧 vnode 的内容
        api.setTextContent(elm, '');
      }
    } else if (oldVnode.text !== vnode.text) {
      if (isDef(oldCh)) {
        removeVnodes(elm, oldCh as Array<VNode>, 0, (oldCh as Array<VNode>).length - 1);
      }
        // 如果新的 vnode 节点是文本节点，如果文本内容和旧 vnode 不一样则设置新的值
      api.setTextContent(elm, vnode.text as string);
    }
      // 调用 postpatch 钩子
    if (isDef(hook) && isDef(i = hook.postpatch)) {
      i(oldVnode, vnode);
    }
  }
 
  return function patch(oldVnode: VNode | Element, vnode: VNode): VNode {
    let i: number, elm: Node, parent: Node;
      //记录被插入的vnode队列，用于批触发insert
    const insertedVnodeQueue: VNodeQueue = [];
      //调用全局pre钩子
    for (i = 0; i < cbs.pre.length; ++i) cbs.pre[i]();
      //如果oldvnode是dom节点，转化为oldvnode
    if (!isVnode(oldVnode)) {
      oldVnode = emptyNodeAt(oldVnode);
    }
      //如果oldvnode与vnode相似，进行更新
    if (sameVnode(oldVnode, vnode)) {
      patchVnode(oldVnode, vnode, insertedVnodeQueue);
    } else {
        //否则，将vnode插入，并将oldvnode从其父节点上直接删除
      elm = oldVnode.elm as Node;
      parent = api.parentNode(elm);
 
      createElm(vnode, insertedVnodeQueue);
 
      if (parent !== null) {
        api.insertBefore(parent, vnode.elm as Node, api.nextSibling(elm));
        removeVnodes(parent, [oldVnode], 0, 0);
      }
    }
      //插入完后，调用被插入的vnode的insert钩子
    for (i = 0; i < insertedVnodeQueue.length; ++i) {
      (((insertedVnodeQueue[i].data as VNodeData).hook as Hooks).insert as any)(insertedVnodeQueue[i]);
    }
      //然后调用全局下的post钩子
    for (i = 0; i < cbs.post.length; ++i) cbs.post[i]();
      //返回vnode用作下次patch的oldvnode
    return vnode;
  };
}
