Clone the repo: 
```
git clone https://github.wdf.sap.corp/d052213/revenue-graph.git
```

Copy `arial.ttf` to `fonts/arial.ttf`


Download jpgraph from https://jpgraph.net/download/ and extract to folder `jpgraph-4.2.6`
Add the following line in `jpgraph-4.2.6/src/jpg-config.inc.php`

```
define('TTF_DIR',dirname(__FILE__, 3) . '/fonts/');
```

```
// cf push from within the directory! 
cd revenue-graph
cf push revenue-graph -m 128M
```



Sample calls:

``` https://revenue-graph.cfapps.eu10.hana.ondemand.com/?c=Canada&d=decline&x1[]=2018%20Q4&x1[]=2019%20Q1&x1[]=2019%20Q2&y1[]=67&y1[]=70&y1[]=74&y2[]=64&y2[]=61&y2[]=53  ```

![graph1](https://revenue-graph.cfapps.eu10.hana.ondemand.com/graph.php?c=Canada&d=decline&x1[]=2018%20Q4&x1[]=2019%20Q1&x1[]=2019%20Q2&y1[]=67&y1[]=70&y1[]=74&y2[]=64&y2[]=61&y2[]=53)


``` https://revenue-graph.cfapps.eu10.hana.ondemand.com/?c=Canada&d=increase&x1[]=2018%20Q4&x1[]=2019%20Q1&x1[]=2019%20Q2&y1[]=67&y1[]=70&y1[]=74&y2[]=65&y2[]=79&y2[]=84 ```

![graph2](https://revenue-graph.cfapps.eu10.hana.ondemand.com/graph.php?c=Canada&d=increase&x1[]=2018%20Q4&x1[]=2019%20Q1&x1[]=2019%20Q2&y1[]=67&y1[]=70&y1[]=74&y2[]=65&y2[]=79&y2[]=84)


Toggle:

``` https://revenue-graph.cfapps.eu10.hana.ondemand.com/toggle.php?c=Canada&x1[]=2018%20Q4&x1[]=2019%20Q1&x1[]=2019%20Q2  ```

``` https://revenue-graph.cfapps.eu10.hana.ondemand.com/toggle-reset.php  ```


