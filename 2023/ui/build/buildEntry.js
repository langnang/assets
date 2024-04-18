/**
 * 生成 JavaScript 入口文件
 */
const fs = require("fs");
const path = require("path")

const files = fs.readdirSync(path.join(__dirname, "./../src/js"), 'utf-8')
const entry = fs.openSync(path.join(__dirname, "./../src/js/index.ts"), 'w')
const entryInner = files.reduce((total, file) => (file !== 'index.ts' && file !== 'index.docs.ts' && /\.ts$/.test(file)) ? total + `export { ${file.replace('.ts', '')} } from './${file.replace('.ts', '')}'\n` : total, '')
fs.writeSync(entry, entryInner);


const entryOfDocs = fs.openSync(path.join(__dirname, "./../src/js/index.docs.ts"), 'w')
const entryOfDocsInner = files.reduce((total, file) => (file !== 'index.ts' && file !== 'index.docs.ts' && /\.ts$/.test(file)) ? total + `export { __${file.replace('.ts', '')}__ } from './${file.replace('.ts', '')}'\n` : total, '')
fs.writeSync(entryOfDocs, entryOfDocsInner);