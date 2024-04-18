import { iniToJSON } from "./../js";

const ini = `
[Node_1]
key_1 = 001
key_2 = 002
key_3 = 003

[Node_2:123]
key_1 = 001
key_2 = 002
key_3 = 003
`;

console.log(iniToJSON(ini));