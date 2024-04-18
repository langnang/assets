import gh_api from "./../../../xxxx_gh-api/packages/index";

export const projects_list = () =>
  gh_api({ owner: "langnang" })
    .projects()
    .list();

export const columns_list = () =>
  gh_api({ owner: "langnang" })
    .project_columns()
    .list({ project_id: 5815947 });
