import Vue from 'vue'
import SvgIcon from '@/components/SvgIcon'// svg component
import Ico from '@/components/Ico'
// register globally
Vue.component('svg-icon', SvgIcon)
Vue.component('Ico', Ico)

const req = require.context('./svg', false, /\.svg$/)
const requireAll = requireContext => requireContext.keys().map(requireContext)
requireAll(req)
