<template>
  <div class="app">
    <apexcharts
      height="400"
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
  props: {
    ipdall_right_rightname: null,
    ipdall_right_ipdall: null
  },
  data() {
    return {
      series: [
        {
          data: [
            // 400, 430, 448, 470, 540, 580, 690, 1100, 1200, 1380
          ]
        }
      ],
      chartOptions: {
        chart: {
          type: "bar",
          height: 350
        },
        plotOptions: {
          bar: {
            barHeight: "100%",
            distributed: true,
            horizontal: true
            // dataLabels: {
            //   position: "bottom"
            // }
          }
        },
        colors: [
          "#33b2df",
          "#546E7A",
          "#d4526e",
          "#13d8aa",
          "#A5978B",
          "#2b908f",
          "#f9a3a4",
          "#90ee7e",
          "#f48024",
          "#69d2e7"
        ],
        dataLabels: {
          enabled: true,
          textAnchor: "start",
          style: {
            colors: ["#546E7A"]
          },
          formatter: function(val, opt) {
            return opt.w.globals.labels[opt.dataPointIndex] + ":  " + val;
          },
          offsetX: 0
          // dropShadow: {
          //   enabled: true
          // }
        },
        stroke: {
          width: 1,
          colors: ["#fff"]
        },
        xaxis: {
          categories: [
            "บัตรประกันสุขภาพถ้วนหน้า",
            "ประกันสังคม",
            "ข้าราชการ ",
            "ชำระเงินเอง",
            "ประกันภัยรถพรบ.บุคคลที่3",
            "บัตรประกันสุขภาพ คนต่างด้าว",
            "อื่นๆ"
          ]
        },
        yaxis: {
          labels: {
            show: false
          }
        },
        // title: {
        //   text: "Custom DataLabels",
        //   align: "center",
        //   floating: true
        // },
        // subtitle: {
        //   text: "Category Names as DataLabels inside bars",
        //   align: "center"
        // },
        tooltip: {
          theme: "dark",
          x: {
            show: false
          },
          y: {
            title: {
              formatter: function() {
                return "";
              }
            }
          }
        }
      }
    };
  },
  mounted() {
    // console.log(this.series[0].data);
    // console.log(this.chartOptions);
    // console.log(this.ipdall_right_rightname);

    this.series[0].data = this.ipdall_right_ipdall;
    this.chartOptions.xaxis.categories = this.ipdall_right_rightname;
  }
};
</script>
