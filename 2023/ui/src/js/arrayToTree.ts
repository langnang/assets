interface Options {
  label: String; // 标签文本
  key: String; // 关键字
  parent: String; // 父元素
  depth: String; // 深度
  separator: String; // 文本分隔符：自组缺失的类
  minDepth: Number; // 限制最小深度
}

/**
 * 将数组转换为树状数组
 * @param array {Array}
 * @param key {String}
 * @param options {Object}
 */
export const arrayToTree = (array: any[]) => {
  const _array: any[] = [...array];
  return tree([...array], maxDepth(_array))[0].children;
};
/**
 * 最大深度
 * @param array
 */
const maxDepth = (array: Object[]) =>
  array.reduce(
    (total: number, value: any) => (value.depth > total ? value.depth : total),
    0
  );
/**
 *
 * @param array 当前数组
 * @param depth 当前深度
 * @param origin 原始数组
 */
const tree = (origin: any, depth: number, array: any = []) => {
  // 深度到达最小值时返回
  if (depth == 0) {
    return array;
  }
  // 过滤当前深度下的所有元素
  let result: any[] = origin.filter((v: any) => v.depth == depth);
  // 根据过滤的元素生成父类，检测原型中是否存在该父类，存在就合并元素
  result = result.reduce((total: any, value: any) => {
    // 查找其父元素所在位置
    let index: number = total.findIndex(
      (item: any) => item.name == value.parent
    );
    // 判断父元素是否存在?(存在):(不存在)
    if (index == -1) {
      // 父元素不存在
      // 初始化父元素
      let parent: any = {
        name: value.parent,
        parent: value.parent.substr(0, value.parent.lastIndexOf(">>")),
        depth: value.depth - 1,
        children: []
      };
      // 查找原始数据中的父元素
      let parentOrigin: any = origin.find(
        (item: any) => item.name == parent.name && item.depth == parent.depth
      );
      // 如果原始数据中不存在该父元素，将该父元素填充至原始数据中，以便于下一深度的查询/过滤
      if (!parentOrigin) {
        origin.push({
          name: value.parent,
          parent: value.parent.substr(0, value.parent.lastIndexOf(">>")),
          depth: value.depth - 1
        });
      }
      total.push({
        ...parentOrigin,
        ...parent,
      });
      index = total.length - 1;
    }
    // 查找前一深度生成中的父元素
    let parentPre: any = array.find(
      (item: any) => item.name == value.name && item.depth == value.depth
    );
    if (parentPre) {
      total[index].children.push({
        ...value,
        ...parentPre
      });
    } else {
      total[index].children.push(value);
    }
    return total;
  }, []);
  depth--;
  return tree(
    origin,
    depth,
    result
  );
};
export const __arrayToTree__ = {
  description: "数组转树状结构",

}
