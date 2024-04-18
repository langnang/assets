import { $original_meta, $original_content, $original_comment, $original_field, $original_link } from "./_original"
import _ from 'lodash'
const original_meta = _.cloneDeep($original_meta)
const original_content = _.cloneDeep($original_content)
original_content.$formItems = ['title', 'slug', 'type', 'domains', 'scan_urls', 'list_url_regexes', 'content_url_regexes', 'fields', 'expand'];
const original_comment = _.cloneDeep($original_comment)
const original_field = _.cloneDeep($original_field)
const original_link = _.cloneDeep($original_link)
export default {
  label: '爬虫',
  value: 'spider',
  description: '',
  visible: true,
  disabled: false,
  original_meta,
  original_content,
  original_comment,
  original_field,
  original_link
}
