
import { Random } from "mockjs"
import { map, types, statuses } from './modules/_original'
const req = require.context('./modules', false, /\.js$/)
const requireAll = requireContext => requireContext.keys().filter(v => v.indexOf('_') !== 2).map(requireContext).map(v => v ? v.default : {})
const _options = [
  { label: '基础', value: 'base', description: '', },
  { label: '批次', value: 'batch', description: '批处理', },
  { label: '相册', value: 'album', description: '', },
  // { label: '文章', value: 'article', description: '', },
  { label: '音频', value: 'audio', description: '', },
  { label: '拓展', value: 'awesome', description: '', },
  { label: '书册', value: 'book', description: '', },
  { label: '日历', value: 'calender', description: '', },
  { label: '备忘', value: 'cheatsheet', description: '', },
  { label: '云盘', value: 'cloud', description: '', },
  { label: '集合', value: 'collection', description: '', },
  { label: '部署', value: 'deploy', description: '', },
  { label: '依赖', value: 'dependency', description: '', },
  { label: '词典', value: 'dictionary', description: '', },
  { label: '特效', value: 'effect', description: '', },
  { label: '论坛', value: 'forum', description: '', },
  { label: '游戏', value: 'game', description: '', },
  { label: '图表', value: 'graph', description: '', },
  // { label: '图标', value: 'icon', description: '', },
  { label: '图片', value: 'image', description: '', },
  // { label: '资讯', value: 'news', description: '', },
  { label: '名词', value: 'noun', description: '', },
  { label: '小说', value: 'novel', description: '', },
  { label: '接口', value: 'openapi', description: '', },
  { label: '封装', value: 'package', description: '', },
  { label: '诗词', value: 'poetry', description: '', },
  { label: '资产', value: 'property', description: '财产、道具', },
  // { label: '试题', value: 'question', description: '', },
  // { label: '语录', value: 'quote', description: '', },
  { label: '食谱', value: 'recipe', description: '', },
  { label: '规则', value: 'rule', description: '', },
  { label: '商城', value: 'shop', description: '', },
  { label: '片段', value: 'snippet', description: '', },
  { label: '应用', value: 'software', description: '', },
  // { label: '爬虫', value: 'spider', description: '', },
  { label: '代办', value: 'todo', description: '', },
  { label: '工具', value: 'toolkit', description: '', },
  { label: '视频', value: 'video', description: '', },
  { label: '远程', value: 'webshell', description: '', },
  // { label: '导航', value: 'webstack', description: '', },
  { label: '百科', value: 'wiki', description: '', },
]
const options = requireAll(req).concat(_options.map(v => ({ ...v, disabled: true, visible: true, })))
  .filter(v => v.visible)
  .map(v => ({
    ...v,
    backgroundColor: Random.color(),
    dataImage: Random.dataImage('300x100', v.label),
  }))
export default {
  options,
  map,
  types,
  statuses,
}
