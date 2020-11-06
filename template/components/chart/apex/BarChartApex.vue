<template>
  <div class="app">
    <apexcharts
      width="550"
      type="bar"
      :options="chartOptions"
      :series="series"
    ></apexcharts>
  </div>
</template>

<script>
import VueApexCharts from "vue-apexcharts";
export default {
  components: {
    apexcharts: VueApexCharts
  },
  data() {
    return {
      chartOptions: {
        chart: {
          id: "vuechart-example"
        },
        xaxis: {
          categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998]
        }
      },
      series: [
        {
          name: "series-1",
          data: [30, 40, 45, 50, 49, 60, 70, 81]
        }
      ]
    };
  }
};
</script>
