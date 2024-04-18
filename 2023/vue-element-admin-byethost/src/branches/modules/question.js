import { $original_meta, $original_content, $original_comment, $original_field, $original_link } from "./_original"
import _ from 'lodash'
const original_meta = _.cloneDeep($original_meta)
const original_content = _.cloneDeep($original_content)
// {
// ..._.cloneDeep($original_content),
// $tableColumns: ['cid', 'title', 'description', 'suggestion', 'type', 'status', 'created_at', 'updated_at', 'release_at'],
// $formItems: ['title', 'type', 'description', 'suggestion', 'text'],
// }
const original_comment = _.cloneDeep($original_comment)
const original_field = _.cloneDeep($original_field)
const original_link = _.cloneDeep($original_link)
export default {
  label: '试题',
  value: 'question',
  description: '',
  visible: true,
  disabled: false,
  original_meta,
  original_content,
  original_comment,
  original_field,
  original_link
}
