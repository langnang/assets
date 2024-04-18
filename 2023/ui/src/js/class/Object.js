export class MyJavaScriptObject {
	constructor(obj) {
		this.obj = obj;
	}
	isArray = () => this.typeOf() === 'Array';
	isNumber = () => this.typeOf() === 'Number';
	typeOf() {
		const type = Object.prototype.toString.call(this.obj);
		return type.substring(8, type.length - 1);
	}
}
