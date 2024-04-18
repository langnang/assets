<script>
import { isEmoji } from '@/utils/validate'
export default {
  name: 'Ico',
  functional: true,
  props: {
    icon: {
      type: String,
      default: ''
    },

  },
  render(h, context) {
    const { icon, } = context.props
    const vnodes = []

    if (icon) {
      if (icon.includes('el-icon')) {
        vnodes.push(<i class={[icon, 'sub-el-icon']} />)
      } else if (isEmoji(icon)) {
        vnodes.push(<span>{icon}</span>)
      } else {
        vnodes.push(<svg-icon icon-class={icon} class='sub-el-icon' />)
      }
    }
    return vnodes
  }
}
</script>

<style scoped>
.sub-el-icon {
  color: currentColor;
  font-size: 18px;
  width: 1em;
  height: 1em;
}
</style>
