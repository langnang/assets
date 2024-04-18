import request from '@/utils/request'

import _ from 'lodash'

export const key = 'icon'
export const name = '图标'

import { $original_meta, $original_content } from '@/constants'
const original_meta = _.cloneDeep($original_meta)
const original_content = _.cloneDeep($original_content)
export { original_meta, original_content, }
