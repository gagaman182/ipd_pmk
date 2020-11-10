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
    </v-layout>
  </v-container>
</template>

<script>
import axios from "axios";

import StackedbarTopDiag from "@/components/chart/apex/StackedbarTopDiag";
import StackedbarTopDiag15age from "@/components/chart/apex/StackedbarTopDiag15age";

export default {
  name: "dashboardmiddle",
  components: {
    StackedbarTopDiag,
    StackedbarTopDiag15age
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
      ipdall_table_topdiag: null
    };
  },
  mounted() {
    this.feathapex_topdiag();
    this.feathapex_topdiag15();
    this.feathgoogle_table_topdiag();
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
          // console.log(this.ipdall_table_topdiag);
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
