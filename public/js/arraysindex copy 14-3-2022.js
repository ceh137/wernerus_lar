const mins = {
 'MSKtoBL':3596,
 'SPBtoBL':4172,
 'MSKtoVL': 3619,
 'SPBtoVL': 3854,
 'MSKtoVR':1197,
 'SPBtoVR':1568,
 'MSKtoEK':1733,
 'SPBtoEK':1884,
 'MSKtoIR':2644,
 'SPBtoIR':2773,
 'MSKtoKZ':1348,
 'SPBtoKZ':1692,
 'MSKtoKD':1623,
 'SPBtoKD':1939,
 'MSKtoKRSN':2327,
 'SPBtoKRSN':2538,
 'MSKtoNN':1087,
 'SPBtoNN':1389,
 'MSKtoNS':2310,
 'SPBtoNS':2613,
 'MSKtoOM':2132,
 'SPBtoOM':2462,
 'MSKtoPM':1540,
 'SPBtoPM':1788,
 'MSKtoRND':1417,
 'SPBtoRND':1692,
 'MSKtoSM':1430,
 'SPBtoSM':1760,
 'MSKtoTL':1375,
 'SPBtoTL':1760,
 'MSKtoUU':2797,
 'SPBtoUU':3079,
 'MSKtoUFA':1595,
 'SPBtoUFA':1870,
 'MSKtoHB':3725,
 'SPBtoHB':3854,
 'MSKtoCLB': 1705,
 'SPBtoCLB':1925,
 'MSKtoCT':2926,
 'SPBtoCT':3255,
}
const array  = {
    'MSKtoSPBexpress': {
        price: {
            'docs': {
                send: 100, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 200, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 300, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 1500, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 1500, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 1500, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 1500, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 1500, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 1500, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
                toAddress: 240, fromAddress: 240
            },
            'single': {
                toAddress: 450, fromAddress: 450
            },
            'minP': {
                toAddress: 600, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 800, fromAddress: 900
            },
            'upTo3m': {
                toAddress: 1300, fromAddress: 1600
            },
            'upTo5m': {
                toAddress: 1800, fromAddress: 2000
            },
            'upTo7m': {
                toAddress: 2800, fromAddress: 3200
            },
            'upTo10m': {
                toAddress: 4700, fromAddress: 5200
            },
            'upTo20m': {
                toAddress: 6200, fromAddress: 6700
            },
            'upTo30m': {
                toAddress: 8000, fromAddress: 8100
            },
            'upTo40m': {
                toAddress: 8000, fromAddress: 8100
            },
            '40m+': {
                toAddress: 10000, fromAddress: 12000
            }
        }
    },
    'MSKtoSPBeconom' : {
        price: {
            'docs': {
                send: 50, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 100, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 200, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 1000, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 1000, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 1000, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 1000, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 1000, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 1000, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
                toAddress: 240, fromAddress: 240
            },
            'single': {
                toAddress: 450, fromAddress: 450
            },
            'minP': {
                toAddress: 600, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 800, fromAddress: 900
            },
            'upTo3m': {
                toAddress: 1300, fromAddress: 1600
            },
            'upTo5m': {
                toAddress: 1800, fromAddress: 2000
            },
            'upTo7m': {
                toAddress: 2800, fromAddress: 3200
            },
            'upTo10m': {
                toAddress: 4700, fromAddress: 5200
            },
            'upTo20m': {
                toAddress: 6200, fromAddress: 6700
            },
            'upTo30m': {
                toAddress: 8000, fromAddress: 8100
            },
            'upTo40m': {
                toAddress: 8000, fromAddress: 8100
            },
            '40m+': {
                toAddress: 10000, fromAddress: 12000
            }
        }
    },
    'SPBtoMSKexpress' : {
        price: {
            'docs': {
                send: 100, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 200, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 300, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 1500, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 1500, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 1500, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 1500, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 1500, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 1500, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
                toAddress: 240, fromAddress: 240
            },
            'single': {
                toAddress: 450, fromAddress: 450
            },
            'minP': {
                toAddress: 600, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 800, fromAddress: 900
            },
            'upTo3m': {
                toAddress: 1300, fromAddress: 1600
            },
            'upTo5m': {
                toAddress: 1800, fromAddress: 2000
            },
            'upTo7m': {
                toAddress: 2800, fromAddress: 3200
            },
            'upTo10m': {
                toAddress: 4700, fromAddress: 5200
            },
            'upTo20m': {
                toAddress: 6200, fromAddress: 6700
            },
            'upTo30m': {
                toAddress: 8000, fromAddress: 8100
            },
            'upTo40m': {
                toAddress: 8000, fromAddress: 8100
            },
            '40m+': {
                toAddress: 10000, fromAddress: 12000
            }
        }
    },
    'SPBtoMSKeconom': {
        price: {
            'docs': {
                send: 50, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 100, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 200, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 1000, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 1000, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 1000, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 1000, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 1000, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 1000, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
            toAddress: 240, fromAddress: 240
            },
            'single': {
                toAddress: 450, fromAddress: 450
            },
            'minP': {
                toAddress: 600, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 800, fromAddress: 900
            },
            'upTo3m': {
                toAddress: 1300, fromAddress: 1600
            },
            'upTo5m': {
                toAddress: 1800, fromAddress: 2000
            },
            'upTo7m': {
                toAddress: 2800, fromAddress: 3200
            },
            'upTo10m': {
                toAddress: 4700, fromAddress: 5200
            },
            'upTo20m': {
                toAddress: 6200, fromAddress: 6700
            },
            'upTo30m': {
                toAddress: 8000, fromAddress: 8100
            },
            'upTo40m': {
                toAddress: 8000, fromAddress: 8100
            },
            '40m+': {
                toAddress: 10000, fromAddress: 12000
            }
        }
    },
    'MSKtoKRSNeconom' : {
        price: {
            'docs': {
                send: 2327, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 2327, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 2327, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 4653, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 4653, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 4653, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 4653, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 4653, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 4653, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
    'SPBtoKRSNeconom': {
        price: {
            'docs': {
                send: 2538, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 2538, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 2538, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 5076, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 5076, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 5076, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 5076, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 5076, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 5076, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
    'MSKtoUUeconom': {
        price: {
            'docs': {
                send: 2797, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 2797, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 2797, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 5593, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 5593, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 5593, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 5593, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 5593, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 5593, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
    'SPBtoUUeconom': {
        price: {
            'docs': {
                send: 3079, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 3079, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 3079, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 6157, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 6157, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 6157, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 6157, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 6157, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 6157, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
    'SPBtoIReconom': {
        price: {
            'docs': {
                send: 2773, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 2773, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 2773, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 5546, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 5546, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 5546, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 5546, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 5546, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 5546, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
    'MSKtoIReconom': {
        price: {
            'docs': {
                send: 2644, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 2644, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 2644, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 5288, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 5288, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 5288, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 5288, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 5288, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 5288, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
    'MSKtoBLeconom': {
        price: {
            'docs': {
                send: 3596, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 3596, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 3596, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 7191, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 7191, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 7191, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 7191, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 7191, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 7191, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
    'SPBtoBLeconom': {
        price: {
            'docs': {
                send: 4172, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 4172, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 4172, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 8343, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 8343, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 8343, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 8343, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 8343, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 8343, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
    'MSKtoHBeconom': {
        price: {
            'docs': {
                send: 3725, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 3725, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 3725, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 7450, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 7450, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 7450, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 7450, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 7450, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 7450, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
    'SPBtoHBeconom': {
        price: {
            'docs': {
                send: 3854, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 3854, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 3854, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 7708, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 7708, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 7708, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 7708, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 7708, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 7708, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
    'SPBtoVLeconom': {
        price: {
            'docs': {
                send: 3854, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 3854, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 3854, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 7708, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 7708, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 7708, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 7708, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 7708, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 7708, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
    'MSKtoVLeconom': {
        price: {
            'docs': {
                send: 3619, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 3619, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 3619, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 7238, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 7238, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 7238, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 7238, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 7238, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 7238, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
    'SPBtoKZeconom': {
        price: {
            'docs': {
                send: 1692, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 1692, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 1692, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 3383, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 3383, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 3383, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 3383, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 3383, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 3383, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
    'MSKtoKZeconom': {
        price: {
            'docs': {
                send: 1348, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 1348, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 1348, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 2695, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 2695, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 2695, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 2695, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 2695, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 2695, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
    'SPBtoNSeconom': {
        price: {
            'docs': {
                send: 2613, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 2613, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 2613, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 5225, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 5225, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 5225, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 5225, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 5225, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 5225, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            
        }},
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
    'MSKtoNSeconom': {
        price: {
            'docs': {
                send: 2310, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 2310, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 2310, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 4620, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 4620, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 4620, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 4620, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 4620, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 4620, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
    'SPBtoVReconom': {
        price: {
            'docs': {
                send: 1568, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 1568, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 1568, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 3135, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 3135, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 3135, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 3135, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 3135, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 3135, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            
        }},
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
    'MSKtoVReconom': {
        price: {
            'docs': {
                send: 1197, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 1197, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 1197, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 2393, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 2393, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 2393, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 2393, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 2393, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 2393, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
	'SPBtoEKeconom': {
        price: {
            'docs': {
                send: 1884, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 1884, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 1884, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 3768, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 3768, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 3768, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 3768, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 3768, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 3768, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            
        }},
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
    'MSKtoEKeconom': {
        price: {
            'docs': {
                send: 1733, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 1733, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 1733, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 3465, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 3465, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 3465, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 3465, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 3465, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 3465, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
	'SPBtoKDeconom': {
        price: {
            'docs': {
                send: 1939, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 1939, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 1939, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 3878, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 3878, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 3878, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 3878, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 3878, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 3878, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            
        }},
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
    'MSKtoKDeconom': {
        price: {
            'docs': {
                send: 1623, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 1623, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 1623, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 3245, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 3245, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 3245, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 3245, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 3245, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 3245, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
	'SPBtoNNeconom': {
        price: {
            'docs': {
                send: 1389, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 1389, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 1389, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 2778, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 2778, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 2778, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 2778, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 2778, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 2778, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            
        }},
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
    'MSKtoNNeconom': {
        price: {
            'docs': {
                send: 1087, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 1087, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 1087, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 2173, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 2173, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 2173, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 2173, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 2173, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 2173, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
	'SPBtoOMeconom': {
        price: {
            'docs': {
                send: 2462, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 2462, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 2462, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 4923, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 4923, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 4923, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 4923, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 4923, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 4923, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
    'MSKtoOMeconom': {
        price: {
            'docs': {
                send: 2132, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 2132, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 2132, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 4263, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 4263, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 4263, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 4263, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 4263, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 4263, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
	'SPBtoPMeconom': {
        price: {
            'docs': {
                send: 1788, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 1788, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 1788, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 3575, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 3575, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 3575, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 3575, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 3575, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 3575, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            
        }},
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
    'MSKtoPMeconom': {
        price: {
            'docs': {
                send: 1540, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 1540, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 1540, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 3080, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 3080, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 3080, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 3080, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 3080, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 3080, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
	'SPBtoRNDeconom': {
        price: {
            'docs': {
                send: 1692, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 1692, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 1692, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 3383, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 3383, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 3383, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 3383, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 3383, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 3383, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            
        }},
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
    'MSKtoRNDeconom': {
        price: {
            'docs': {
                send: 1417, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 1417, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 1417, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 2833, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 2833, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 2833, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 2833, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 2833, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 2833, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
	'SPBtoSMeconom': {
        price: {
            'docs': {
                send: 1760, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 1760, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 1760, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 3520, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 3520, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 3520, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 3520, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 3520, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 3520, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            
        }},
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
    'MSKtoSMeconom': {
        price: {
            'docs': {
                send: 1430, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 1430, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 1430, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 2860, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 2860, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 2860, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 2860, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 2860, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 2860, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
	'SPBtoTLeconom': {
        price: {
            'docs': {
                send: 1760, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 1760, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 1760, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 3520, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 3520, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 3520, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 3520, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 3520, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 3520, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            
        }},
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
    'MSKtoTLeconom': {
        price: {
            'docs': {
                send: 1375, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 1375, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 1375, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 2750, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 2750, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 2750, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 2750, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 2750, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 2750, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
	'SPBtoUFAeconom': {
        price: {
            'docs': {
                send: 1870, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 1870, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 1870, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 3740, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 3740, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 3740, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 3740, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 3740, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 3740, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            
        }},
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
    'MSKtoUFAeconom': {
        price: {
            'docs': {
                send: 1595, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 1595, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 1595, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 3190, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 3190, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 3190, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 3190, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 3190, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 3190, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
	'SPBtoCLBeconom': {
        price: {
            'docs': {
                send: 1925, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 1925, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 1925, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 3850, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 3850, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 3850, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 3850, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 3850, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 3850, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            
        }},
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
    'MSKtoCLBeconom': {
        price: {
            'docs': {
                send: 1705, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 1705, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 1705, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 3410, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 3410, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 3410, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 3410, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 3410, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 3410, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
	'SPBtoCTeconom': {
        price: {
            'docs': {
                send: 3255, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 3255, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 3255, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 6510, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 6510, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 6510, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 6510, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 6510, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 6510, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            
        }},
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    },
    'MSKtoCTeconom': {
        price: {
            'docs': {
                send: 2926, bort: 100, rigidPac: 500, stretchPac: 50, insurance: 30
            },
            'single': {
                send: 2926, bort: 150, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            'minP': {
                send: 2926, bort: 200, rigidPac: 500, stretchPac: 100, insurance: 50
            },
            '5m-': {
                forunit: 5852, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '5m+': {
                forunit: 5852, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '10m+': {
                forunit: 5852, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '30m+': {
                forunit: 5852, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '40m+': {
                forunit: 5852, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            },
            '50m+': {
                forunit: 5852, bort: 300, rigidPac: 900, stretchPac: 100, insPerKG: 0.1
            }
        },
        ADprice: {
            'docs': {
                toAddress: 700, fromAddress: 700
            },
            'single': {
                toAddress: 700, fromAddress: 700
            },
            'minP': {
                toAddress: 700, fromAddress: 700
            },
            'upTo1m': {
                toAddress: 700, fromAddress: 700
            },
            'upTo3m': {
                toAddress: 1200, fromAddress: 1200
            },
            'upTo5m': {
                toAddress: 1700, fromAddress: 1700
            },
            'upTo7m': {
                toAddress: 2700, fromAddress: 2700
            },
            'upTo10m': {
                toAddress: 4200, fromAddress: 4200
            },
            'upTo20m': {
                toAddress: 5900, fromAddress: 5900
            },
            'upTo30m': {
                toAddress: 7700, fromAddress: 7700
            },
            'upTo40m': {
                toAddress: 7900, fromAddress: 7900
            },
            '40m+': {
                toAddress: 9900, fromAddress: 9900
            }
        }
    }
	}

dayOff = {
    0: [1, 2, 3, 4, 5, 6, 7, 8, 10, 17, 24, 31],
    1: [7, 14, 21, 23, 28],
    2: [7, 8, 14, 21, 28],
    3: [4, 11, 18, 25],
    4: [1, 2, 9, 10, 16, 23, 30],
    5: [6, 12, 13, 20, 27],
    6: [4, 11, 18, 25],
    7: [1, 8, 15, 22, 29],
    8: [5, 12, 19, 26],
    9: [3, 10, 17, 24, 31],
    10: [4, 7, 14, 21, 28],
    11: [5, 12, 19, 26, 31]
}
months = {
    0: 'Января',
    1: 'Февраля',
    2: 'Марта',
    3: 'Апреля',
    4: 'Мая',
    5: 'Июня',
    6: 'Июля',
    7: 'Августа',
    8: 'Сентября',
    9: 'Октября',
    10: 'Ноября',
    11: 'Декабря'
}