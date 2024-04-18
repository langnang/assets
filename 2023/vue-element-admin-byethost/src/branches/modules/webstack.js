import { $original_meta, $original_content, $original_comment, $original_field, $original_link } from "./_original"
import _ from 'lodash'
const original_meta = _.cloneDeep($original_meta)
const original_content = _.cloneDeep($original_content)
original_content.$tableColumns.splice(4, 0, 'url')
original_content.$formItems.splice(4, 1)
original_content.$formItems.splice(3, 0, 'url')
const original_comment = _.cloneDeep($original_comment)
const original_field = _.cloneDeep($original_field)
const original_link = _.cloneDeep($original_link)
export default {
  label: '导航',
  value: 'webstack',
  description: '',
  visible: true,
  disabled: false,
  original_meta,
  original_content,
  original_comment,
  original_field,
  original_link
}
