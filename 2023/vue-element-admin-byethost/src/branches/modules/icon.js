import { $original_meta, $original_content, $original_comment, $original_field, $original_link } from "./_original"
import _ from 'lodash'
const original_meta = _.cloneDeep($original_meta)
const original_content = _.cloneDeep($original_content)
const original_comment = _.cloneDeep($original_comment)
const original_field = _.cloneDeep($original_field)
const original_link = _.cloneDeep($original_link)
export default {
  label: '图标',
  value: 'icon',
  description: '',
  visible: true,
  disabled: false,
  original_meta,
  original_content,
  original_comment,
  original_field,
  original_link
}
