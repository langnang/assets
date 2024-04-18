import axios from "./../../plugins/axios";
export default {
  // List your grants
  "GET /applications/grants": () => axios(),
  // Get a single grant
  "GET /applications/grants/{grant_id}": () => axios(),
  // Delete a grant
  "DELETE /applications/grants/{grant_id}": () => axios(),
  // List your authorizations
  "GET /authorizations": () => axios(),
  // Create a new authorization
  "POST /authorizations": () => axios(),
  // Get-or-create an authorization for a specific app
  "PUT /authorizations/clients/{client_id}": () => axios(),
  // Get-or-create an authorization for a specific app and fingerprint
  "PUT /authorizations/clients/{client_id}/{fingerprint}": () => axios(),
  // Get a single authorization
  "GET /authorizations/{authorization_id}": () => axios(),
  // Update an existing authorization
  "PATCH /authorizations/{authorization_id}": () => axios(),
  // Delete an authorization
  "DELETE /authorizations/{authorization_id}": () => axios(),
};
