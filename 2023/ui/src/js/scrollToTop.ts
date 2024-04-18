/**
 * 滚动至页面顶部
 */
export const scrollToTop = () => {
  const c = document.documentElement.scrollTop || document.body.scrollTop;
  if (c > 0) {
    window.requestAnimationFrame(scrollToTop);
    window.scrollTo(0, c - c / 8);
  }
};
export const __scrollToTop__ = {
  description: "滚动至页面顶部",

}

