/**
 * 欧几里得算法
 * @param {number} originalA
 * @param {number} originalB
 * @return {number}
 */
export const euclideanAlgorithm = (originalA, originalB) => {
  const a = Math.abs(originalA);
  const b = Math.abs(originalB);
  return (b === 0) ? a : euclideanAlgorithm(b, a % b);
}
export const __euclideanAlgorithm__ = {
  description: "欧几里得算法",

}

