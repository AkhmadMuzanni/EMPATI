# -*- coding: utf-8 -*-
"""
Created on Thu Aug 16 02:37:28 2018

@author: USER
"""

import training_SVR as tr
import numpy as np
import matplotlib.pyplot as plt
import time

dataTraining,dataTesting,alpha,alpha_star,max_data,min_data,y_prediksi,tahun = tr.main("beras")
# count distance for all data
print(dataTraining)
data_normal = list(dataTraining)
for data in dataTesting:
    data_normal.append(data)
jarak_all = tr.get_dist(data_normal)

# slice distance for data testing
jarak_testing = jarak_all[len(dataTraining):,:len(dataTraining)]

# calculate the value of kernel RBF for data testing
kernel_testing = tr.get_kernel_rbf(jarak_testing,tr.sigma)

# calculate hessian matrix for data testing
hessian_testing = tr.get_hessian(kernel_testing, tr.lamda)

# count y prediction for data testing
y_pred_test = [0.0] * len(dataTesting)
for i in range(len(y_pred_test)):
    y_pred_test[i] = np.sum([H*(alp_s - alp) for H,alp_s,alp in zip(hessian_testing[i],alpha_star,alpha)])

# denormalization from y prediction
y_denorm_test = np.zeros_like(y_pred_test)
for i in range(len(y_pred_test)):
    y_denorm_test[i] = y_pred_test[i] * (max_data-min_data) + min_data

# list parameters for plotting
y_pred_all = list(y_prediksi)
y_pred_all.extend(y_pred_test)
#print(y_pred_all)
#print(np.transpose(data_normal)[3])
#thn = range(2004,2018)
#print(thn)

print("MAX_ITER = " + str(tr.iter_max))
print("C = " + str(tr.C_value))
print("SIGMA = " + str(tr.sigma))
print("LAMBDA = " + str(tr.lamda))
print("EPSILON = " + str(tr.epsilon))
print("cLR = " + str(tr.cLR))

# plotting process
print(y_pred_all)
plt.plot(tahun, y_pred_all, color="red", label="Prediksi")
plt.plot(tahun, np.transpose(data_normal)[3], color="green", label="Aktual")
plt.legend()
#plt.text(0,0,"Testing")
plt.show()
print("waktu = " + str(time.time() - tr.start_time))
