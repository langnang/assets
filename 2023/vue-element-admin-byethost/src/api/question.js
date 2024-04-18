import request from '@/utils/request'

import _ from 'lodash'

export const key = 'question'
export const name = '试题'

import { $original_meta, $original_content } from '@/constants'
const original_meta = _.cloneDeep($original_meta)
const original_content = {
  ..._.cloneDeep($original_content),
  $tableColumns: ['cid', 'title', 'description', 'suggestion', 'type', 'status', 'created_at', 'updated_at', 'release_at'],
  $formItems: ['title', 'type', 'description', 'suggestion', 'text'],
}
export { original_meta, original_content, }
