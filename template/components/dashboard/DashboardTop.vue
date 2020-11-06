<template>
  <v-container grid-list-xl fluid>
    <v-layout row wrap>
      <v-flex sm12>
        <div class="headline grey--text text--darken-1 mainhead">
          <h3><v-icon large>web</v-icon> จำนวนผู้รับบริการผู้ป่วยใน(คน)</h3>
        </div>
      </v-flex>
      <v-flex lg3 sm12>
        <v-card color="pink lighten-2 white--text">
          <v-card-title class="pb-0">
            <h3>จำนวนยอดยกมา</h3>
          </v-card-title>
          <v-card-text class="white--text">
            <div class="text-xs-center d-flex align-center">
              <v-icon large color="white lighten-3"
                >transfer_within_a_station</v-icon
              >
              <h3 class="display-2">{{ ipd_old }}</h3>
              <v-progress-circular
                v-if="showprogress"
                indeterminate
                color="grey lighten-5"
              ></v-progress-circular>
            </div>
          </v-card-text>
          <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn dark flat small @click="detail_ipd_old()">
              <v-icon color="white lighten-3">slideshow</v-icon></v-btn
            >
          </v-card-actions>
        </v-card>
      </v-flex>
      <v-flex lg3 sm12>
        <v-card color="orange lighten-3 white--text ">
          <v-card-title class="pb-0">
            <h3>จำนวนคนไข้รับใหม่</h3>
          </v-card-title>
          <v-card-text>
            <div class="text-xs-center d-flex align-center">
              <v-icon large color="white lighten-3">group_add</v-icon>
              <h3 class="display-2">{{ ipd_new }}</h3>
              <v-progress-circular
                v-if="showprogress"
                indeterminate
                color="grey lighten-5"
              ></v-progress-circular>
            </div>
          </v-card-text>
          <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn dark flat small @click="detail_ipd_new()">
              <v-icon color="white lighten-3">slideshow</v-icon></v-btn
            >
          </v-card-actions>
        </v-card>
      </v-flex>
      <v-flex lg3 sm12>
        <v-card color="deep-orange accent-2 white--text">
          <v-card-title class="pb-0">
            <h3>จำนวนคนไข้ ณ ปัจจุบัน</h3>
          </v-card-title>

          <v-card-text>
            <div class="text-xs-center d-flex align-center">
              <v-icon large color="white lighten-3 ">groups</v-icon>

              <h3 class="display-2">{{ ipd_all }}</h3>

              <v-progress-circular
                v-if="showprogress"
                indeterminate
                color="grey lighten-5"
              ></v-progress-circular>
            </div>
          </v-card-text>
          <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn dark flat small @click="detail_ipd_all()">
              <v-icon color="white lighten-3">slideshow</v-icon></v-btn
            >
          </v-card-actions>
        </v-card>
      </v-flex>

      <v-flex lg3 sm12>
        <v-card color="pink darken-4 white--text">
          <v-card-title class="pb-0">
            <h3>จำนวนคนไข้จำหน่าย</h3>
          </v-card-title>
          <v-card-text class="white--text">
            <div class="text-xs-center d-flex align-center">
              <v-icon large color="white lighten-3">wc</v-icon>
              <h3 class="display-2">{{ ipd_out }}</h3>
              <v-progress-circular
                v-if="showprogress"
                indeterminate
                color="grey lighten-5"
              ></v-progress-circular>
            </div>
          </v-card-text>
          <v-card-actions>
            <v-spacer></v-spacer>
            <!-- <v-btn  dark flat small>คลิก</v-btn> -->
            <v-btn dark flat small @click="detail_ipd_out()">
              <v-icon color="white lighten-3">slideshow</v-icon></v-btn
            >
          </v-card-actions>
        </v-card>
      </v-flex>
    </v-layout>
    <span>{{ today }}</span>
    <v-layout row wrap>
      <v-flex lg12 sm12>
        <v-card>
          <h3 class=" pa-3">
            กราฟแสดงจำนวนผู้รับบริการผู้ป่วยในรายปี
          </h3>

          <v-card-text class="white--text">
            <div>
              <LineChartMonth
                v-if="loaddata_month"
                :chartData="ipdall_month"
              ></LineChartMonth>
            </div>
          </v-card-text>
          <v-divider></v-divider>
        </v-card>
      </v-flex>
      <v-flex lg12 sm12>
        <v-card>
          <h3 class=" pa-4">
            จำนวนผู้ป่วย Admit เดือนล่าสุด
          </h3>

          <v-card-text>
            <div>
              <ColumnDays
                v-if="loaddata_day"
                :ipdall_day_name="ipdall_day_name"
                :ipdall_day_ipdall="ipdall_day_ipdall"
              ></ColumnDays>
            </div>
          </v-card-text>
          <v-divider></v-divider>
        </v-card>
      </v-flex>
      <!-- <v-flex lg3 sm12>
        <v-card>
          <h3 class=" pa-4">
            จำนวนผู้รับบริการตามสิทธิการรักษา
          </h3>

          <v-card-text class="white--text">
            <div>
              <BarChartRight
                v-if="loaddata_right"
                :ipdall_right_rightname="ipdall_right_rightname"
                :ipdall_right_ipdall="ipdall_right_ipdall"
              ></BarChartRight>
            </div>
          </v-card-text>
          <v-divider></v-divider>
        </v-card>
      </v-flex> -->
    </v-layout>
  </v-container>
</template>

<script>
import moment from "moment";
import axios from "axios";
import LineChartMonth from "@/components/chart/google/LineChartMonth";
// import BarChartRight from "@/components/chart/apex/BarChartRight";
import ColumnDays from "@/components/chart/apex/ColumnDays";

export default {
  name: "dashboardtop",
  components: {
    LineChartMonth,
    // BarChartRight
    ColumnDays
  },
  data() {
    return {
      loaddata_month: false,
      ipdall_month: null,
      loaddata_right: false,
      ipdall_right: null,
      ipdall_right_rightname: null,
      ipdall_right_ipdall: null,
      loaddata_day: false,
      ipdall_day: null,
      ipdall_day_name: null,
      ipdall_day_ipdall: null
    };
  },
  computed: {
    today: function() {
      return moment()
        .add("years", 543)
        .lang("th")
        .format("Do MMMM YYYY ");
    }
  },
  props: {
    ipd_all: null,
    ipd_new: null,
    ipd_old: null,
    ipd_out: null,
    showprogress: null
  },
  mounted() {
    this.feathgoogle_line_month();
    this.feathapex_column_day();
    // this.feathapex_bar_right();
  },
  methods: {
    detail_ipd_all() {
      this.$emit("detail-ipd-all", { message: "/ipd/ipdall" });
    },
    detail_ipd_new() {
      this.$emit("detail-ipd-new", { message: "/ipd/ipdnew" });
    },
    detail_ipd_old() {
      this.$emit("detail-ipd-old", { message: "/ipd/ipdold" });
    },
    detail_ipd_out() {
      this.$emit("detail-ipd-out", { message: "/ipd/ipdout" });
    },
    //fresh line google chart month
    async feathgoogle_line_month() {
      await axios
        .get(`${this.$axios.defaults.baseURL}google/ipd_line_month_ipd.php`)
        .then(response => {
          this.loaddata_month = true;
          this.ipdall_month = response.data;
          //console.log(this.ipdall_month);
        });
    },

    //fresh column apex chart days
    async feathapex_column_day() {
      await axios
        .get(`${this.$axios.defaults.baseURL}apex/ipd_column_day.php`)
        .then(response => {
          this.loaddata_day = true;
          this.ipdall_day = response.data;

          this.ipdall_day_name = this.ipdall_day.map(item => item.days);
          this.ipdall_day_ipdall = this.ipdall_day.map(item => item.ipdall);
        });
    }
    //fresh bar apex chart right
    // async feathapex_bar_right() {
    //   await axios
    //     .get(`${this.$axios.defaults.baseURL}apex/ipd_right_all.php`)
    //     .then(response => {
    //       this.ipdall_right = response.data;

    //       this.ipdall_right_rightname = this.ipdall_right.map(
    //         item => item.rights
    //       );

    //       this.ipdall_right_ipdall = this.ipdall_right.map(item => item.ipdall);
    //       // console.log(this.ipdall_right_ipdall);

    //       this.loaddata_right = true;
    //     });
    // }
  }
};
</script>
<style scoped>
h2,
h3 {
  font-family: "Kanit", sans-serif;
}
span {
  font-family: "Kanit", sans-serif;
  font-size: 20px;
  font-weight: bold;
}
</style>
