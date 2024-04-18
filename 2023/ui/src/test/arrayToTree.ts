import { arrayToTree, isJSONString } from "./../js";

let array = [
    { name: 'Mine', },
    { name: '开发', },
    { name: '开发>>前端', },
    { name: '开发>>前端>>HTML', },
    { name: '开发>>前端>>CSS', },
    { name: '开发>>前端>>JavaScript', },
    { name: '开发>>后端', },
    { name: '开发>>后端>>PHP', },
    { name: '开发>>后端>>ASP.NetCore', },
];

array = array.map(v => {
    let options = {};
    if (v["description"] && isJSONString(v["description"])) {
        options = JSON.parse(v["description"]);
    }

    let name_spt = v.name.split(">>");
    return {
        ...v,
        ...options,
        // label: name_spt[name_spt.length - 1],
        // key: "",
        parent: name_spt.slice(0, name_spt.length - 1).join(">>"),
        depth: name_spt.length,
    }
})
console.log(JSON.stringify(arrayToTree(array)));