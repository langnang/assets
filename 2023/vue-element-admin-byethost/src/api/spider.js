import request from '@/utils/request'

export const selectSpiderOrigin = (data = {}, params = {}) => request({
  url: '/api/spider/origin',
  method: 'post',
  data,
  params
})
