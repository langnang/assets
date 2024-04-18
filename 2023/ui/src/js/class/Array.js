export class MyJavaScriptArray {
	constructor(...elements) {
		this.list = elements;
	}
	pop() {}
	push() {}
	shift() {}
	unshift() {}
	forEach() {}
}

export const pop = (array) => new MyJavaScriptArray(...array).pop();
