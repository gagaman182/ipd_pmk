<template>
  <v-container grid-list-xl fluid>
    <v-layout row wrap>
      <v-flex sm12>
        <div class="headline grey--text text--darken-1">
          <h3><v-icon large>account_circle</v-icon> จำนวนคนไข้แยกโรครายปี</h3>
        </div>
      </v-flex>
      <v-flex lg6 sm12>
        <v-card color="#eeecda">
          <v-responsive>
            <h3 class=" pa-3">
              สาเหตุการป่วยของผู้ป่วยใน 10 อันดับแรก
            </h3>
          </v-responsive>
          <v-card-text>
            <div>
              <StackedbarTopDiag
                v-if="loaddata_topdiag"
                :ipdall_topdiag_name="ipdall_topdiag_name"
                :ipdall_topdiag_ipdall_f="ipdall_topdiag_ipdall_f"
                :ipdall_topdiag_ipdall_m="ipdall_topdiag_ipdall_m"
                :ipdall_topdiag_ipdall_years="ipdall_topdiag_ipdall_years"
              ></StackedbarTopDiag>
            </div>
          </v-card-text>
          <v-divider></v-divider>
          <!-- <v-card-actions>
            <v-btn flat small>Link</v-btn>
          </v-card-actions> -->
        </v-card>
      </v-flex>
      <v-flex lg6 sm12>
        <v-card color="#eeecda">
          <v-responsive>
            <h3 class=" pa-3">
              สาเหตุการป่วยของผู้ป่วยใน 10 อันดับแรก ในกลุ่มอายุน้อยกว่าเท่ากับ
              15 ปี
            </h3>
          </v-responsive>
          <v-card-text>
            <div>
              <StackedbarTopDiag15age
                v-if="loaddata_topdiag15"
                :ipdall_topdiag_ipdall_m15_years="
                  ipdall_topdiag_ipdall_m15_years
                "
                :ipdall_topdiag_name15="ipdall_topdiag_name15"
                :ipdall_topdiag_ipdall_f15="ipdall_topdiag_ipdall_f15"
                :ipdall_topdiag_ipdall_m15="ipdall_topdiag_ipdall_m15"
              ></StackedbarTopDiag15age>
            </div>
          </v-card-text>
          <v-divider></v-divider>
          <!-- <v-card-actions>
            <v-btn flat small>Link</v-btn>
          </v-card-actions> -->
        </v-card>
      </v-flex>
      <v-flex lg4 sm12>
        <v-card>
          <v-responsive>
            <h3 class=" pa-3">
              ตารางแสดงข้อมูลจำนวน แอ็ดมิท/จำนวนเตียง
            </h3>
          </v-responsive>
          <v-card-text>
            <div>
              <BedStableAll :ipd_beds_table="ipd_beds_table"></BedStableAll>
            </div>
          </v-card-text>
          <v-divider></v-divider>
        </v-card>
      </v-flex>
      <v-flex lg8 sm12>
        <v-card>
          <v-responsive>
            <h3 class=" pa-3">
              กราฟแสดงข้อมูลเปอร์เซ็นต์การแอ็ดมิท
            </h3>
          </v-responsive>
          <v-card-text>
            <div>
              <BarChartBeds
                v-if="loaddata_table_bed"
                :height="1100"
                :ipdall_bed_label="ipdall_bed_label"
                :ipdall_bed_data="ipdall_bed_data"
              ></BarChartBeds>
            </div>
          </v-card-text>
          <v-divider></v-divider>
        </v-card>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>
import axios from "axios";

import StackedbarTopDiag from "@/components/chart/apex/StackedbarTopDiag";
import StackedbarTopDiag15age from "@/components/chart/apex/StackedbarTopDiag15age";
import BedStableAll from "@/components/table/bedstableall";
import BarChartBed from "@/components/chart/google/BarChartBed";
import BarChartBeds from "@/components/chart/chartjs/BarChartBeds";
export default {
  name: "dashboardmiddle",
  components: {
    StackedbarTopDiag,
    StackedbarTopDiag15age,
    BedStableAll,
    BarChartBed,
    BarChartBeds
  },
  data() {
    return {
      loaddata_topdiag: false,
      ipdall_topdiag: null,
      ipdall_topdiag_name: null,
      ipdall_topdiag_ipdall_f: null,
      ipdall_topdiag_ipdall_m: null,
      ipdall_topdiag15: null,
      ipdall_topdiag_ipdall_years: null,
      ipdall_topdiag_name15: null,
      ipdall_topdiag_ipdall_f15: null,
      ipdall_topdiag_ipdall_m15: null,
      ipdall_topdiag_ipdall_m15_years: null,

      loaddata_table_topdiag: false,
      ipdall_table_topdiag: null,
      loaddata_table_bed: null,
      ipdall_bed: null,
      ipdall_bed_label: null,
      ipdall_bed_data: null
    };
  },
  mounted() {
    this.feathapex_topdiag();
    this.feathapex_topdiag15();
    this.feathgoogle_table_topdiag();
    this.feathbar_bed();
  },
  methods: {
    //fresh stackedbar apex chart top diag
    async feathapex_topdiag() {
      await axios
        .get(`${this.$axios.defaults.baseURL}apex/ipd_topdiag_stackedbar.php`)
        .then(response => {
          this.loaddata_topdiag = true;
          this.ipdall_topdiag = response.data;

          this.ipdall_topdiag_name = this.ipdall_topdiag.map(
            item => item.icd_desc
          );
          this.ipdall_topdiag_ipdall_f = this.ipdall_topdiag.map(
            item => item.sex_f
          );
          this.ipdall_topdiag_ipdall_m = this.ipdall_topdiag.map(
            item => item.sex_m
          );
          this.ipdall_topdiag_ipdall_years = this.ipdall_topdiag.map(
            item => item.years
          );
        });
    },
    async feathapex_topdiag15() {
      await axios
        .get(
          `${this.$axios.defaults.baseURL}apex/ipd_topdiag_stackedbar_15age.php`
        )
        .then(response => {
          this.loaddata_topdiag15 = true;
          this.ipdall_topdiag15 = response.data;

          this.ipdall_topdiag_name15 = this.ipdall_topdiag15.map(
            item => item.icd_desc
          );
          this.ipdall_topdiag_ipdall_f15 = this.ipdall_topdiag15.map(
            item => item.sex_f
          );
          this.ipdall_topdiag_ipdall_m15 = this.ipdall_topdiag15.map(
            item => item.sex_m
          );
          this.ipdall_topdiag_ipdall_m15_years = this.ipdall_topdiag15.map(
            item => item.years
          );
        });
    },
    //fresh table google chart top diag
    async feathgoogle_table_topdiag() {
      await axios
        .get(`${this.$axios.defaults.baseURL}google/ipd_table_topdiag.php`)
        .then(response => {
          this.loaddata_table_topdiag = true;
          this.ipdall_table_topdiag = response.data;
        });
    },
    //fresh chartjs  bar bed
    async feathbar_bed() {
      await axios
        .get(`${this.$axios.defaults.baseURL}ipd_bed_all.php`)
        .then(response => {
          this.loaddata_table_bed = true;
          this.ipdall_bed = response.data;

          this.ipdall_bed_label = this.ipdall_bed.map(item => item.NAME);
          this.ipdall_bed_data = this.ipdall_bed.map(item => item.BED1_LEVEL);
        });
    }
  }
};
</script>
<style scoped>
h2,
h3 {
  font-family: "Kanit", sans-serif;
}
</style>
