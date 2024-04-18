import { Random } from 'mockjs'

// import * as Base from '@/api/base'
import * as Article from '@/api/article'
import * as WebStack from '@/api/webstack'
import * as Icon from '@/api/icon'

const map = { Article, WebStack, Icon }
// console.log({ Base, Article })
export default Object.keys(map).map(v => ({
  key: map[v].key,
  name: map[v].name,
  params: {
    parent: 0,
  },
  backgroundColor: Random.color(),
  dataImage: Random.dataImage('300x100', map[v].name),
  request: map[v]
}))
//   .concat([{
//   name: '+',
//   dataImage: Random.dataImage('200x70', '+'),
// }])

// [
// {
//   name: 'Base',
//   dataImage: Random.dataImage('300x120', 'Base')
// },
//   {
//     name: 'Article',
//     dataImage: Random.dataImage('300x120', 'Article')
//   },
//   {
//     name: 'WebStack',
//     dataImage: Random.dataImage('300x120', 'WebStack')
//
//   }
// ]
