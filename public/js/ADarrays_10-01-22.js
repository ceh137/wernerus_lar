const AD = {
    'MSK':  {
        'docs': {
            'econom': 240, 'express': 240, 'MSK00zone': 0, 'MSK10zone': 600, 'MSK11zone': 400, 'MSK12zone':200, 'MSK13zone': 0, 'MSK14zone':200, 'MSK15zone': 400, 'MSK20zone':1600,'MSK21zone': 1400, 'MSK22zone':1200, 'MSK23zone': 700, 'MSK24zone':1200 , 'MSK25zone':1400
        },
        'single': {
            'econom': 450, 'express': 450, 'MSK00zone': 0, 'MSK10zone': 700, 'MSK11zone': 500, 'MSK12zone':300, 'MSK13zone': 0, 'MSK14zone':300, 'MSK15zone': 500, 'MSK20zone':1700,'MSK21zone': 1500, 'MSK22zone':1300, 'MSK23zone': 800, 'MSK24zone':1300 , 'MSK25zone':1500
        },
        'minP': {
            'econom': 550, 'express': 550, 'MSK00zone': 0, 'MSK10zone': 800, 'MSK11zone': 600, 'MSK12zone':400, 'MSK13zone': 0, 'MSK14zone':400, 'MSK15zone': 600, 'MSK20zone':1800,'MSK21zone': 1600, 'MSK22zone':1400, 'MSK23zone': 900, 'MSK24zone':1400 , 'MSK25zone':1600
        },
        'upTo1m': {
            'econom': 800, 'express': 800, 'MSK00zone': 0, 'MSK10zone': 900, 'MSK11zone': 700, 'MSK12zone':500, 'MSK13zone': 0, 'MSK14zone':500, 'MSK15zone': 700, 'MSK20zone':1900,'MSK21zone': 1700, 'MSK22zone':1500, 'MSK23zone': 1000, 'MSK24zone':1500 , 'MSK25zone':1700
        },
        'upTo3m': {
           'econom': 1300, 'express': 1300, 'MSK00zone': 0, 'MSK10zone': 1300, 'MSK11zone': 1000, 'MSK12zone':700, 'MSK13zone': 0, 'MSK14zone':700, 'MSK15zone': 1000, 'MSK20zone':2300,'MSK21zone': 2000, 'MSK22zone':1700, 'MSK23zone': 1200, 'MSK24zone':1700 , 'MSK25zone':2000
        },
        'upTo5m': {
            'econom': 1700, 'express': 1700, 'MSK00zone': 0, 'MSK10zone': 1500, 'MSK11zone': 1200, 'MSK12zone':900, 'MSK13zone': 0, 'MSK14zone':900, 'MSK15zone': 1200, 'MSK20zone':2500,'MSK21zone': 2200, 'MSK22zone':1900, 'MSK23zone': 1400, 'MSK24zone':1900 , 'MSK25zone':2200
        },
        'upTo7m': {
            'econom': 3000, 'express': 3000, 'MSK00zone': 0, 'MSK10zone': 1800, 'MSK11zone': 1500, 'MSK12zone':1200, 'MSK13zone': 0, 'MSK14zone':1200, 'MSK15zone': 1500, 'MSK20zone':2800,'MSK21zone': 2500, 'MSK22zone':2200, 'MSK23zone': 1700, 'MSK24zone':2200 , 'MSK25zone':2500
        },
        'upTo10m': {
            'econom': 5200, 'express': 5200, 'MSK00zone': 0, 'MSK10zone': 2100, 'MSK11zone': 1800, 'MSK12zone':1500, 'MSK13zone': 0, 'MSK14zone':1500, 'MSK15zone': 1800, 'MSK20zone':3100,'MSK21zone': 2800, 'MSK22zone':2500, 'MSK23zone': 2000, 'MSK24zone':2500 , 'MSK25zone':2800
        },
        'upTo20m': {
            'econom': 6700, 'express': 6700, 'MSK00zone': 0, 'MSK10zone': 1050, 'MSK11zone': 900, 'MSK12zone':750, 'MSK13zone': 0, 'MSK14zone':750, 'MSK15zone': 900, 'MSK20zone':1550,'MSK21zone': 1400, 'MSK22zone':1250, 'MSK23zone': 1000, 'MSK24zone':1250 , 'MSK25zone':1400
        },
        'upTo30m': {
            'econom': 8100, 'express': 8100, 'MSK00zone': 0, 'MSK10zone': 500, 'MSK11zone': 500, 'MSK12zone':500, 'MSK13zone': 0, 'MSK14zone':500, 'MSK15zone': 500, 'MSK20zone':1000,'MSK21zone': 1000, 'MSK22zone':1000, 'MSK23zone': 1000, 'MSK24zone':1000 , 'MSK25zone':1000
        },
        'upTo40m': {
            'econom': 8100, 'express': 8100, 'MSK00zone': 0, 'MSK10zone': 500, 'MSK11zone': 500, 'MSK12zone':500, 'MSK13zone': 0, 'MSK14zone':500, 'MSK15zone': 500, 'MSK20zone':1000,'MSK21zone': 1000, 'MSK22zone':1000, 'MSK23zone': 1000, 'MSK24zone':1000 , 'MSK25zone':1000
        },
        '40m+': {
           'econom': 12000, 'express': 12000, 'MSK00zone': 0, 'MSK10zone': 500, 'MSK11zone': 500, 'MSK12zone':500, 'MSK13zone': 0, 'MSK14zone':500, 'MSK15zone': 500, 'MSK20zone':1000,'MSK21zone': 1000, 'MSK22zone':1000, 'MSK23zone': 1000, 'MSK24zone':1000 , 'MSK25zone':1000
        }
    },
    'SPB': {
        'docs': {
            'econom': 240, 'express': 240, 'SPB00zone': 0, 'SPB10zone': 1200, 'SPB11zone': 600, 'SPB12zone':400, 'SPB13zone': 200, 'SPB14zone': 200, 'SPB15zone': 400, 'SPB16zone': 400
        },
        'single': {
            'econom': 450, 'express': 450, 'SPB00zone': 0, 'SPB10zone': 1300, 'SPB11zone': 700, 'SPB12zone':500, 'SPB13zone':300, 'SPB14zone': 300, 'SPB15zone': 500, 'SPB16zone': 500
        },
        'minP': {
            'econom': 490, 'express': 490, 'SPB00zone': 0, 'SPB10zone': 1400, 'SPB11zone': 800, 'SPB12zone':600, 'SPB13zone': 400, 'SPB14zone': 400, 'SPB15zone': 600, 'SPB16zone': 600
        },
        'upTo1m': {
            'econom': 750, 'express': 750, 'SPB00zone': 0, 'SPB10zone': 1500, 'SPB11zone': 900, 'SPB12zone':700, 'SPB13zone': 500, 'SPB14zone': 500, 'SPB15zone': 700, 'SPB16zone': 700
        },
        'upTo3m': {
            'econom': 1200, 'express': 1200, 'SPB00zone': 0, 'SPB10zone': 1700, 'SPB11zone': 1300, 'SPB12zone':1000, 'SPB13zone': 700, 'SPB14zone': 700, 'SPB15zone': 700, 'SPB16zone': 1000
        },
        'upTo5m': {
            'econom': 1600, 'express': 1600, 'SPB00zone': 0, 'SPB10zone': 1900, 'SPB11zone': 1500, 'SPB12zone':1200, 'SPB13zone': 900, 'SPB14zone': 900, 'SPB15zone': 1200, 'SPB16zone': 1200
        },
        'upTo7m': {
            'econom': 2700, 'express': 2700, 'SPB00zone': 0, 'SPB10zone': 2200, 'SPB11zone': 1800, 'SPB12zone':1500, 'SPB13zone': 1200, 'SPB14zone': 1200, 'SPB15zone': 1500, 'SPB16zone': 1500
        },
        'upTo10m': {
            'econom': 4700, 'express': 4700, 'SPB00zone': 0, 'SPB10zone': 2500, 'SPB11zone': 2100, 'SPB12zone':1800, 'SPB13zone': 1500, 'SPB14zone': 1500, 'SPB15zone': 1800, 'SPB16zone': 1800
        },
        'upTo20m': {
            'econom': 6200, 'express': 6200, 'SPB00zone': 0, 'SPB10zone': 1000, 'SPB11zone': 1050, 'SPB12zone':900, 'SPB13zone': 750, 'SPB14zone': 750, 'SPB15zone': 900, 'SPB16zone': 900
        },
        'upTo30m': {
            'econom': 7500, 'express': 7500, 'SPB00zone': 0, 'SPB10zone': 1000, 'SPB11zone': 900, 'SPB12zone':700, 'SPB13zone': 600, 'SPB14zone': 600, 'SPB15zone': 700, 'SPB16zone': 700
        },
        'upTo40m': {
            'econom': 7500, 'express': 7500, 'SPB00zone': 0, 'SPB10zone': 1200, 'SPB11zone': 1100, 'SPB12zone':900, 'SPB13zone': 750, 'SPB14zone': 750, 'SPB15zone': 900, 'SPB16zone': 900
        },
        '40m+': {
            'econom': 10000, 'express': 10000, 'SPB00zone': 0, 'SPB10zone': 1500, 'SPB11zone': 1300, 'SPB12zone':1100, 'SPB13zone': 900, 'SPB14zone': 900, 'SPB15zone': 1100, 'SPB16zone': 1100
        }
    }
}