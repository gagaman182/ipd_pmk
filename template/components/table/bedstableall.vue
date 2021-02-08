<template>
  <div class="app">
    <div>
      <v-row justify="space-around">
        <h2>
          <v-data-table
            v-model="complex.selected"
            :headers="complex.headers"
            :search="search"
            :items="complex.items"
            :rows-per-page-items="[20]"
            class="elevation-1"
            item-key="name"
          >
            <template
              #item.index="{ item }"
              slot="items"
              slot-scope="props"
              :item.actions="{ item }"
            >
              <!-- <td>{{ props.item.TYPE_ID }}</td> -->
              <td>{{ props.item.NAME }}</td>
              <td>{{ props.item.BED }}</td>
              <td>
                <v-chip
                  class="ma-2"
                  label
                  :color="getColor(props.item.BED1_LEVEL)"
                  >{{ props.item.BED1_LEVEL }}%</v-chip
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
          // {
          //   text: "#",
          //   value: "TYPE_ID"
          // },
          {
            text: "ประเภทเตียง",
            value: "NAME"
          },
          {
            text: "จำนวนแอ็ดมิท/จำนวนเตียง",
            value: "BED"
          },
          {
            text: "สามัญ",
            value: "BED1_LEVEL"
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
        .get(`${this.$axios.defaults.baseURL}ipd_bed_all.php`)
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
