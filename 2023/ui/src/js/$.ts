import { selector, __selector__ } from "./selector";

export const $ = selector
__selector__.description = __selector__.description.replace("selector", "$");
export const __$__ = __selector__