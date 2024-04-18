<template>
  <div class="resume-container">
    <el-row :gutter="20">
      <el-col :span="6" class="resume-left">
        <el-card>
          <img
            src="@/assets/art/artwork.png"
            alt=""
            style="display: block;margin: 0 auto;border-radius: 50%;width: 180px;"
          />
          <el-divider></el-divider>
          <h1 style="text-align: center;">陈朗朗</h1>

          <ul style="list-style:none;">
            <li>
              <i class="el-icon-user"></i>
              1995.07.06
            </li>
            <li>
              <i class="el-icon-phone"></i>
              17315764248
            </li>
            <li>
              <i class="el-icon-place"></i>
              苏州市昆山市
            </li>
            <li>
              <i class="el-icon-message"></i>
              1624327728@qq.com
            </li>
          </ul>
        </el-card>
      </el-col>
      <el-col :span="18" class="resume-right">
        <el-row>
          <el-col>
            <el-card>
              <h1>工作</h1>
              <el-divider></el-divider>
              <el-row :gutter="20" v-for="(item, key) in works" :key="key">
                <el-col :span="8" style="text-align: center;">
                  {{ item.entry_time }} ~ {{ item.resignation_time }}
                </el-col>
                <el-col :span="8" style="text-align: center;">
                  {{ item.company }}
                </el-col>
                <el-col :span="8" style="text-align: center;">
                  {{ item.position }}
                </el-col>
                <el-col :span="24" v-for="(c, k) in item.content" :key="k">
                  <i class="el-icon-paperclip"></i>
                  <span> {{ c }}</span>
                </el-col>
              </el-row>
            </el-card>
          </el-col>
          <el-col>
            <el-card>
              <h1>技能</h1>
              <el-divider></el-divider>
              <el-row
                :gutter="20"
                v-for="(value, key) in skills.progress"
                :key="key"
              >
                <el-col :span="5">{{ key }}</el-col>
                <el-col :span="19">
                  <el-progress
                    :text-inside="true"
                    :stroke-width="24"
                    :percentage="value"
                    status="exception"
                  >
                  </el-progress>
                </el-col>
              </el-row>
              <el-row>
                <el-col
                  :span="24"
                  v-for="(item, key) in skills.content"
                  :key="key"
                >
                  <i class="el-icon-paperclip"></i>
                  <span> {{ item }}</span>
                </el-col>
              </el-row>
            </el-card>
          </el-col>
          <el-col class="education">
            <el-card>
              <h1>教育</h1>
              <el-divider></el-divider>
              <el-row :gutter="20">
                <el-col :span="6" style="text-align: center;">
                  {{ education.admission_time }} ~
                  {{ education.graduation_time }}
                </el-col>
                <el-col :span="6" style="text-align: center;">
                  {{ education.university }}
                </el-col>
                <el-col :span="6" style="text-align: center;">
                  {{ education.profession }}
                </el-col>
                <el-col :span="6" style="text-align: center;">
                  {{ education.qualification }}
                </el-col>
              </el-row>
            </el-card>
          </el-col>
          <el-col>
            <el-card>
              <h1>评价</h1>
              <el-divider></el-divider>
              <el-row :gutter="20">
                <el-col :span="24" v-for="(item, key) in evaluate" :key="key">
                  {{ item }}
                </el-col>
              </el-row>
            </el-card>
          </el-col>
        </el-row>
      </el-col>
    </el-row>
  </div>
</template>
<script>
export default {
  data() {
    return {
      works: [
        {
          entry_time: "2018.06",
          resignation_time: "至今",
          company: "研华科技（中国）有限公司",
          position: "前端开发工程师",
          content: [
            "使用HTML5+CSS3实现符合w3c标准和规范的UI布局；",
            "使用JavaScript、Ajax、jQuery等实现数据处理和界面交互；",
            "使用PHP、ASP.Net Core等实现后台开发并与服务器之间数据处理；",
            "使用Grafana工具，PostgreSQL数据库等独立实现数据的可视化；",
            "使用NodeJS，AngularJs和Echarts等工具独立开发实用性插件。",
            "使用PHP语言以及Laraval框架来实现并完善项目后台服务与功能；",
            "使用各类合适的前端插件来完善项目页面特效、提升项目功能和及时渲染数据；",
            "使用ASP.Net Core搭建网站后台服务项目；",
            "基于UI设计以及各类前端插件完成相应的项目展示内容以及功能效果；",
            "使用Grafana工具与PostgreSQL数据库等完成数据的可视化；",
            "使用NodeJs，Angular和Echarts开发可视化Panel；",
          ],
        },
        {
          entry_time: "2017.08",
          resignation_time: "2017.10",
          company: "金舟软件有限责任公司",
          position: "前端开发实习生",
          content: [
            "根据UI设计并使用基础DIV+CSS布局完成项目网页布局；",
            "根据需求并使用基础JavaScript完成项目网页基本特效与功能；",
            "完成项目页面的设计与开发，并协作完成页面的功能的修复与维护；",
            "完成简单的项目前端与后端、数据库的数据交互，并将相关数据渲染到前端页面。",
          ],
        },
      ],
      projects: [],
      skills: {
        content: [
          "熟悉HTML5+CSS3并能够熟练开发符合w3c标准和规范的Web开发；",
          "熟悉Sass等CSS预处理器，使代码更具逻辑性，便于后期维护；",
          "熟悉jQuery-UI、Bootstrap等前端UI框架；",
          "熟悉JavaScript以及了解ES6常用语法；",
          "熟悉jQuery、Echarts等第三方库，并封装过一些常用方法；",
          "熟悉Ajax、了解Axios技术与后台之间处理数据；",
          "熟悉Vue、Vue-Cli、Vue Router、gulp实现单页面应用；",
          "熟悉git项目版本控制系统；",
          "熟悉PHP开发语言和SQL(MySQL、PostgreSQL、SQL Server)语言并能够实现后端开发；了解React、Angular框架以及NodeJS开发和微信小程序开发。",
        ],
        progress: {
          HTML: 50,
          CSS: 50,
          JavaScript: 50,
          Vue: 50,
          Node: 50,
          PHP: 50,
          AspNetCore: 50,
          MySQL: 50,
        },
      },
      education: {
        admission_time: "2014.09",
        graduation_time: "2018.06",
        university: "江苏科技大学",
        profession: "信息管理与信息系统",
        qualification: "本科",
      },
      evaluate: [
        "做事踏实负责，对待工作认真，责任心较强，待人真诚，善于沟通，能吃苦；",
        "喜欢WEB前端，具有前端分析、设计和开发能力，具有较强的自学能力和团队协作精神；",
        "热爱互联网行业，能快速的适应自身周边的环境，有一定的抗压能力。",
      ],
    };
  },
};
</script>
<style lang="scss" scoped>
.resume-container {
  width: 1240px;
  // height: 1754px;
  margin: 0 -20px;
}
.resume-left {
  height: 1754px;
}
.resume-right {
  .el-card {
    padding-bottom: 20px;
    font-weight: 400;
    color: #eee;
    font-size: 18px;
  }

  [class*="el-col-"] {
    padding: 6px 0;
  }
  i.svg {
    margin-left: -20px;
    margin-right: 6px;
  }
}
h1 {
  padding: 20px;
  background-color: #666;
  margin: 0 -20px;
}
.el-progress--line.is-exception {
  ::v-deep .el-progress-bar__outer {
    background-color: rgba(0, 0, 0, 0.33);
  }
  ::v-deep .el-progress-bar__inner {
    background-color: #666;
  }
}
</style>
