<template>
  <div class="app">
    <div>
      <v-row justify="space-around">
        <v-toolbar card>
          <v-text-field
            v-model="search"
            flat
            solo
            prepend-icon="search"
            placeholder="ค้นหา"
            hide-details
            class="hidden-sm-and-down"
          ></v-text-field>
        </v-toolbar>
        <v-divider></v-divider>
        <h2>
          <v-data-table
            v-model="complex.selected"
            :headers="complex.headers"
            :search="search"
            :items="complex.items"
            :rows-per-page-items="[10, 20, 50, 100, { text: 'All', value: -1 }]"
            class="elevation-1"
            item-key="name"
          >
            <template
              #item.index="{ item }"
              slot="items"
              slot-scope="props"
              :item.actions="{ item }"
            >
              <td>{{ props.item.PLA_PLACECODE }}</td>
              <td>{{ props.item.HALFPLACE }}</td>
              <td>{{ props.item.BED1 }}</td>

              <td>
                <v-chip
                  class="ma-2"
                  label
                  :color="getColor(props.item.BED1_LEVEL)"
                  >{{ props.item.BED1_LEVEL }}%</v-chip
                >
              </td>
              <td>{{ props.item.BED2 }}</td>

              <td>
                <v-chip
                  class="ma-2"
                  label
                  :color="getColor(props.item.BED2_LEVEL)"
                  >{{ props.item.BED2_LEVEL }}%</v-chip
                >
              </td>
              <td>{{ props.item.BED3 }}</td>

              <td>
                <v-chip
                  class="ma-2"
                  label
                  :color="getColor(props.item.BED3_LEVEL)"
                  >{{ props.item.BED3_LEVEL }}%</v-chip
                >
              </td>
              <td>{{ props.item.BED4 }}</td>

              <td>
                <v-chip
                  class="ma-2"
                  label
                  :color="getColor(props.item.BED4_LEVEL)"
                  >{{ props.item.BED4_LEVEL }}%</v-chip
                >
              </td>
              <td>{{ props.item.BED5 }}</td>

              <td>
                <v-chip
                  class="ma-2"
                  label
                  :color="getColor(props.item.BED5_LEVEL)"
                  >{{ props.item.BED5_LEVEL }}%</v-chip
                >
              </td>
              <td>{{ props.item.BED6 }}</td>

              <td>
                <v-chip
                  class="ma-2"
                  label
                  :color="getColor(props.item.BED6_LEVEL)"
                  >{{ props.item.BED6_LEVEL }}%</v-chip
                >
              </td>
              <td>{{ props.item.BED7 }}</td>

              <td>
                <v-chip
                  class="ma-2"
                  label
                  :color="getColor(props.item.BED7_LEVEL)"
                  >{{ props.item.BED7_LEVEL }}%</v-chip
                >
              </td>
              <td>{{ props.item.BED8 }}</td>

              <td>
                <v-chip
                  class="ma-2"
                  label
                  :color="getColor(props.item.BED8_LEVEL)"
                  >{{ props.item.BED8_LEVEL }}%</v-chip
                >
              </td>
              <td>{{ props.item.BED9 }}</td>

              <td>
                <v-chip
                  class="ma-2"
                  label
                  :color="getColor(props.item.BED9_LEVEL)"
                  >{{ props.item.BED9_LEVEL }}%</v-chip
                >
              </td>
              <td>{{ props.item.BED10 }}</td>

              <td>
                <v-chip
                  class="ma-2"
                  label
                  :color="getColor(props.item.BED10_LEVEL)"
                  >{{ props.item.BED10_LEVEL }}%</v-chip
                >
              </td>
              <td>{{ props.item.BED11 }}</td>

              <td>
                <v-chip
                  class="ma-2"
                  label
                  :color="getColor(props.item.BED11_LEVEL)"
                  >{{ props.item.BED11_LEVEL }}%</v-chip
                >
              </td>
              <td>{{ props.item.BED12 }}</td>

              <td>
                <v-chip
                  class="ma-2"
                  label
                  :color="getColor(props.item.BED12_LEVEL)"
                  >{{ props.item.BED12_LEVEL }}%</v-chip
                >
              </td>
              <td>{{ props.item.BED13 }}</td>

              <td>
                <v-chip
                  class="ma-2"
                  label
                  :color="getColor(props.item.BED13_LEVEL)"
                  >{{ props.item.BED13_LEVEL }}%</v-chip
                >
              </td>
              <td>{{ props.item.BED14 }}</td>

              <td>
                <v-chip
                  class="ma-2"
                  label
                  :color="getColor(props.item.BED14_LEVEL)"
                  >{{ props.item.BED14_LEVEL }}%</v-chip
                >
              </td>
              <td>{{ props.item.BED15 }}</td>

              <td>
                <v-chip
                  class="ma-2"
                  label
                  :color="getColor(props.item.BED15_LEVEL)"
                  >{{ props.item.BED15_LEVEL }}%</v-chip
                >
              </td>
              <td>{{ props.item.BED16 }}</td>

              <td>
                <v-chip
                  class="ma-2"
                  label
                  :color="getColor(props.item.BED16_LEVEL)"
                  >{{ props.item.BED16_LEVEL }}%</v-chip
                >
              </td>
              <td>{{ props.item.BED17 }}</td>

              <td>
                <v-chip
                  class="ma-2"
                  label
                  :color="getColor(props.item.BED17_LEVEL)"
                  >{{ props.item.BED17_LEVEL }}%</v-chip
                >
              </td>
              <td>{{ props.item.BED18 }}</td>

              <td>
                <v-chip
                  class="ma-2"
                  label
                  :color="getColor(props.item.BED18_LEVEL)"
                  >{{ props.item.BED18_LEVEL }}%</v-chip
                >
              </td>
              <td>{{ props.item.BED19 }}</td>

              <td>
                <v-chip
                  class="ma-2"
                  label
                  :color="getColor(props.item.BED19_LEVEL)"
                  >{{ props.item.BED19_LEVEL }}%</v-chip
                >
              </td>
              <td>{{ props.item.BED20 }}</td>

              <td>
                <v-chip
                  class="ma-2"
                  label
                  :color="getColor(props.item.BED20_LEVEL)"
                  >{{ props.item.BED20_LEVEL }}%</v-chip
                >
              </td>
              <td>{{ props.item.BED21 }}</td>

              <td>
                <v-chip
                  class="ma-2"
                  label
                  :color="getColor(props.item.BED21_LEVEL)"
                  >{{ props.item.BED21_LEVEL }}%</v-chip
                >
              </td>
              <td>{{ props.item.BED89 }}</td>

              <td>
                <v-chip
                  class="ma-2"
                  label
                  :color="getColor(props.item.BED89_LEVEL)"
                  >{{ props.item.BED89_LEVEL }}%</v-chip
                >
              </td>
              <td>{{ props.item.BED90 }}</td>

              <td>
                <v-chip
                  class="ma-2"
                  label
                  :color="getColor(props.item.BED90_LEVEL)"
                  >{{ props.item.BED90_LEVEL }}%</v-chip
                >
              </td>
              <td>{{ props.item.BED98 }}</td>

              <td>
                <v-chip
                  class="ma-2"
                  label
                  :color="getColor(props.item.BED98_LEVEL)"
                  >{{ props.item.BED98_LEVEL }}%</v-chip
                >
              </td>
              <td>{{ props.item.BED99 }}</td>

              <td>
                <v-chip
                  class="ma-2"
                  label
                  :color="getColor(props.item.BED99_LEVEL)"
                  >{{ props.item.BED99_LEVEL }}%</v-chip
                >
              </td>
            </template>
          </v-data-table>
        </h2>
      </v-row>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  components: {},

  data() {
    return {
      search: null,
      complex: {
        selected: [],
        headers: [
          {
            text: "รหัส",
            value: "PLA_PLACECODE"
          },
          {
            text: "ห้องตรวจ",
            value: "HALFPLACE"
          },
          {
            text: "สามัญ",
            value: "BED1"
          },
          {
            text: "%",
            value: "BED1_LEVEL"
          },
          {
            text: "พิเศษ6ชั้น",
            value: "BED2"
          },
          {
            text: "%",
            value: "BED2_LEVEL"
          },
          {
            text: "พิเศษรวม",
            value: "BED3"
          },
          {
            text: "%",
            value: "BED3_LEVEL"
          },
          {
            text: "ICU",
            value: "BED4"
          },
          {
            text: "%",
            value: "BED4_LEVEL"
          },
          {
            text: "พิเศษ10ชั้น",
            value: "BED5"
          },
          {
            text: "%",
            value: "BED5_LEVEL"
          },
          {
            text: "เตียงเสริม",
            value: "BED6"
          },
          {
            text: "%",
            value: "BED6_LEVEL"
          },
          {
            text: "เตียงเสริม(สำหรับเด็กที่อยู่กับแม่)",
            value: "BED7"
          },
          {
            text: "%",
            value: "BED7_LEVEL"
          },
          {
            text: "พิเศษ6ชั้นVIP",
            value: "BED8"
          },
          {
            text: "%",
            value: "BED8_LEVEL"
          },
          {
            text: "Burn Unit",
            value: "BED9"
          },
          {
            text: "%",
            value: "BED9_LEVEL"
          },
          {
            text: "เตียง admit ลอย",
            value: "BED10"
          },
          {
            text: "%",
            value: "BED10_LEVEL"
          },
          {
            text: "Strok Unit",
            value: "BED11"
          },
          {
            text: "%",
            value: "BED11_LEVEL"
          },
          {
            text: "ICU TRAUMA",
            value: "BED12"
          },
          {
            text: "%",
            value: "BED12_LEVEL"
          },
          {
            text: "Hemato",
            value: "BED13"
          },
          {
            text: "%",
            value: "BED13_LEVEL"
          },
          {
            text: "พิเศษตึก 6 ชั้น VIP Premiere",
            value: "BED14"
          },
          {
            text: "%",
            value: "BED14_LEVEL"
          },
          {
            text: "พิเศษตึก 6 ชั้น VIP 520",
            value: "BED15"
          },
          {
            text: "%",
            value: "BED15_LEVEL"
          },
          {
            text: "Open Heart",
            value: "BED16"
          },
          {
            text: "%",
            value: "BED16_LEVEL"
          },
          {
            text: "BMT",
            value: "BED17"
          },
          {
            text: "%",
            value: "BED17_LEVEL"
          },
          {
            text: "INFECTION",
            value: "BED18"
          },
          {
            text: "%",
            value: "BED18_LEVEL"
          },
          {
            text: "เตียงเสริม Hemato",
            value: "BED19"
          },
          {
            text: "%",
            value: "BED19_LEVEL"
          },
          {
            text: "Cardio",
            value: "BED20"
          },
          {
            text: "%",
            value: "BED20_LEVEL"
          },
          {
            text: "ICU แยกโรค",
            value: "BED21"
          },
          {
            text: "%",
            value: "BED21_LEVEL"
          },
          {
            text: "PUI",
            value: "BED89"
          },
          {
            text: "%",
            value: "BED89_LEVEL"
          },
          {
            text: "ค่าห้องแยกโรคพิเศษ",
            value: "BED90"
          },
          {
            text: "%",
            value: "BED90_LEVEL"
          },
          {
            text: "Pt.PUI",
            value: "BED98"
          },
          {
            text: "%",
            value: "BED98_LEVEL"
          },
          {
            text: "Pt.Cohort ward",
            value: "BED99"
          },
          {
            text: "%",
            value: "BED99_LEVEL"
          }
        ],
        items: [],
        leavedetails: null
      }
    };
  },

  beforeMount() {
    this.feathbedtable();
  },

  methods: {
    //fresh table beds
    async feathbedtable() {
      await axios
        .get(`${this.$axios.defaults.baseURL}ipd_bed.php`)
        .then(response => {
          this.complex.items = response.data;
        });
    },
    //สีใน column
    getColor(status) {
      if (status > 0 && status < 50) return "#9ddfd3";
      else if (status >= 50 && status <= 80) return "#ffc85c";
      else if (status > 80) return "#f05454";
      else if (status == 0) return "#fceef5";
    }
  }
};
</script>
<style scoped>
h2,
h3 {
  font-family: "Kanit", sans-serif;
}

table.v-table tbody td {
  font-size: 18px !important;
}
</style>
