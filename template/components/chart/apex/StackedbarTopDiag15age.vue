<template>
  <div class="app">
    <apexcharts
      type="bar"
      height="380"
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
  props: {
    ipdall_topdiag_name15: null,
    ipdall_topdiag_ipdall_f15: null,
    ipdall_topdiag_ipdall_m15: null,
    ipdall_topdiag_ipdall_m15_years: null
  },
  data() {
    return {
      series: [
        {
          name: "ชาย",
          data: []
        },
        {
          name: "หญิง",
          data: []
        }
      ],
      chartOptions: {
        chart: {
          type: "bar",
          height: 400,
          stacked: true
        },
        plotOptions: {
          bar: {
            horizontal: true,
            barHeight: "100%"
          }
        },
        dataLabels: {
          enabled: true,
          style: {
            fontSize: "16px",
            fontFamily: "Kanit, sans-serif"
          }
        },
        stroke: {
          width: 1,
          colors: ["#fff"]
        },
        title: {
          text: "10 อันดับแรก",
          style: {
            fontSize: "18px",
            fontFamily: "Kanit, sans-serif"
          }
        },
        xaxis: {
          categories: [],
          labels: {
            style: {
              fontSize: "16px",
              fontFamily: "Kanit, sans-serif"
            }
          }
        },
        yaxis: {
          title: {
            text: undefined
          },

          labels: {
            style: {
              fontSize: "14px",
              fontFamily: "Kanit, sans-serif"
            }
          }
        },
        tooltip: {
          style: {
            fontSize: "16px",
            fontFamily: "Kanit, sans-serif"
          }
        },
        fill: {
          opacity: 1
        },
        legend: {
          position: "top",
          horizontalAlign: "left",

          offsetX: 40,
          fontSize: "16px",
          fontFamily: "Kanit, sans-serif"
        },
        colors: ["#cbaf87", "#7e8a97"]
      }
    };
  },
  beforeMount() {
    this.series[0].data = this.ipdall_topdiag_ipdall_m15;
    this.series[1].data = this.ipdall_topdiag_ipdall_f15;
    this.chartOptions.xaxis.categories = this.ipdall_topdiag_name15;
    this.chartOptions.title.text = `ปีงบ ${
      this.ipdall_topdiag_ipdall_m15_years[0]
    }`;
  }
};
</script>
