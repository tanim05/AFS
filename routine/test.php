<tr>
                  <th scope="row">Saterday</th>
                  <td>
                  <div class="form-group">
                    <?php   include 'sub.php';?>
                    <select class="form-control" name="sub_code308">
                      <option>Sub_code</option>
                      <?php while($row3 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row3[0];?>"><?php echo $row3[0];?>
                      </option>
                      <?php endwhile;?>
                      <?php   include 'teacher.php';?>
                    </select><br>
                    <select class="form-control" name="teacher_id308">
                      <option>Teacher</option>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?>
                      </option>
                      <?php endwhile;?>
                    </select><br>        
                    <?php   include 'room.php';?>
                    <select class="form-control" name="room_no308">
                      <option>room_no</option>
                      <?php 
                        $query_room = "SELECT room_no FROM room ";
                        $room_result = mysqli_query($conn, $query_room);
                        while ($row = mysqli_fetch_array($room_result)) { 
                      ?>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                        <option value="<?php echo $row1[0];?>">
                          room-<?php echo $row1[0];
                      ?>
                      </option>
                      <?php endwhile;?>
                      <?php } ?>
                    </select> 
                  </div>
                </td>
                  <td>
                  <div class="form-group">
                    <?php   include 'sub.php';?>
                    <select class="form-control" name="sub_code509">
                      <option>Sub_code</option>
                      <?php while($row3 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row3[0];?>"><?php echo $row3[0];?>
                      </option>
                      <?php endwhile;?>
                      <?php   include 'teacher.php';?>
                    </select><br>
                    <select class="form-control" name="teacher_id509">
                      <option>Teacher</option>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?>
                      </option>
                      <?php endwhile;?>
                    </select><br>        
                    <?php   include 'room.php';?>
                    <select class="form-control" name="room_no509">
                      <option>room_no</option>
                      <?php 
                        $query_room = "SELECT room_no FROM room ";
                        $room_result = mysqli_query($conn, $query_room);
                        while ($row = mysqli_fetch_array($room_result)) { 
                      ?>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                        <option value="<?php echo $row1[0];?>">
                          room-<?php echo $row1[0];
                      ?>
                      </option>
                      <?php endwhile;?>
                      <?php } ?>
                    </select> 
                  </div>
                </td>
                  <td>
                  <div class="form-group">
                    <?php   include 'sub.php';?>
                    <select class="form-control" name="sub_code510">
                      <option>Sub_code</option>
                      <?php while($row3 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row3[0];?>"><?php echo $row3[0];?>
                      </option>
                      <?php endwhile;?>
                      <?php   include 'teacher.php';?>
                    </select><br>
                    <select class="form-control" name="teacher_id510">
                      <option>Teacher</option>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?>
                      </option>
                      <?php endwhile;?>
                    </select><br>        
                    <?php   include 'room.php';?>
                    <select class="form-control" name="room_no510">
                      <option>room_no</option>
                      <?php 
                        $query_room = "SELECT room_no FROM room ";
                        $room_result = mysqli_query($conn, $query_room);
                        while ($row = mysqli_fetch_array($room_result)) { 
                      ?>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                        <option value="<?php echo $row1[0];?>">
                          room-<?php echo $row1[0];
                      ?>
                      </option>
                      <?php endwhile;?>
                      <?php } ?>
                    </select> 
                  </div>
                </td>
                  <td>
                  <div class="form-group">
                    <?php   include 'sub.php';?>
                    <select class="form-control" name="sub_code511">
                      <option>Sub_code</option>
                      <?php while($row3 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row3[0];?>"><?php echo $row3[0];?>
                      </option>
                      <?php endwhile;?>
                      <?php   include 'teacher.php';?>
                    </select><br>
                    <select class="form-control" name="teacher_id511">
                      <option>Teacher</option>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?>
                      </option>
                      <?php endwhile;?>
                    </select><br>        
                    <?php   include 'room.php';?>
                    <select class="form-control" name="room_no511">
                      <option>room_no</option>
                      <?php 
                        $query_room = "SELECT room_no FROM room ";
                        $room_result = mysqli_query($conn, $query_room);
                        while ($row = mysqli_fetch_array($room_result)) { 
                      ?>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                        <option value="<?php echo $row1[0];?>">
                          room-<?php echo $row1[0];
                      ?>
                      </option>
                      <?php endwhile;?>
                      <?php } ?>
                    </select> 
                  </div>
                </td>
                  <td>
                  <div class="form-group">
                    <?php   include 'sub.php';?>
                    <select class="form-control" name="sub_code512">
                      <option>Sub_code</option>
                      <?php while($row3 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row3[0];?>"><?php echo $row3[0];?>
                      </option>
                      <?php endwhile;?>
                      <?php   include 'teacher.php';?>
                    </select><br>
                    <select class="form-control" name="teacher_id512">
                      <option>Teacher</option>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?>
                      </option>
                      <?php endwhile;?>
                    </select><br>        
                    <?php   include 'room.php';?>
                    <select class="form-control" name="room_no512">
                      <option>room_no</option>
                      <?php 
                        $query_room = "SELECT room_no FROM room ";
                        $room_result = mysqli_query($conn, $query_room);
                        while ($row = mysqli_fetch_array($room_result)) { 
                      ?>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                        <option value="<?php echo $row1[0];?>">
                          room-<?php echo $row1[0];
                      ?>
                      </option>
                      <?php endwhile;?>
                      <?php } ?>
                    </select> 
                  </div>
                </td>
                  <td>
                  <div class="form-group">
                    <?php   include 'sub.php';?>
                    <select class="form-control" name="sub_code513">
                      <option>Sub_code</option>
                      <?php while($row3 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row3[0];?>"><?php echo $row3[0];?>
                      </option>
                      <?php endwhile;?>
                      <?php   include 'teacher.php';?>
                    </select><br>
                    <select class="form-control" name="teacher_id513">
                      <option>Teacher</option>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?>
                      </option>
                      <?php endwhile;?>
                    </select><br>        
                    <?php   include 'room.php';?>
                    <select class="form-control" name="room_no513">
                      <option>room_no</option>
                      <?php 
                        $query_room = "SELECT room_no FROM room ";
                        $room_result = mysqli_query($conn, $query_room);
                        while ($row = mysqli_fetch_array($room_result)) { 
                      ?>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                        <option value="<?php echo $row1[0];?>">
                          room-<?php echo $row1[0];
                      ?>
                      </option>
                      <?php endwhile;?>
                      <?php } ?>
                    </select> 
                  </div>
                </td>
                  <td>
                  <div class="form-group">
                    <?php   include 'sub.php';?>
                    <select class="form-control" name="sub_code514">
                      <option>Sub_code</option>
                      <?php while($row3 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row3[0];?>"><?php echo $row3[0];?>
                      </option>
                      <?php endwhile;?>
                      <?php   include 'teacher.php';?>
                    </select><br>
                    <select class="form-control" name="teacher_id514">
                      <option>Teacher</option>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?>
                      </option>
                      <?php endwhile;?>
                    </select><br>        
                    <?php   include 'room.php';?>
                    <select class="form-control" name="room_no514">
                      <option>room_no</option>
                      <?php 
                        $query_room = "SELECT room_no FROM room ";
                        $room_result = mysqli_query($conn, $query_room);
                        while ($row = mysqli_fetch_array($room_result)) { 
                      ?>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                        <option value="<?php echo $row1[0];?>">
                          room-<?php echo $row1[0];
                      ?>
                      </option>
                      <?php endwhile;?>
                      <?php } ?>
                    </select> 
                  </div>
                </td>
                  <td>
                  <div class="form-group">
                    <?php   include 'sub.php';?>
                    <select class="form-control" name="sub_code515">
                      <option>Sub_code</option>
                      <?php while($row3 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row3[0];?>"><?php echo $row3[0];?>
                      </option>
                      <?php endwhile;?>
                      <?php   include 'teacher.php';?>
                    </select><br>
                    <select class="form-control" name="teacher_id515">
                      <option>Teacher</option>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?>
                      </option>
                      <?php endwhile;?>
                    </select><br>        
                    <?php   include 'room.php';?>
                    <select class="form-control" name="room_no515">
                      <option>room_no</option>
                      <?php 
                        $query_room = "SELECT room_no FROM room ";
                        $room_result = mysqli_query($conn, $query_room);
                        while ($row = mysqli_fetch_array($room_result)) { 
                      ?>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                        <option value="<?php echo $row1[0];?>">
                          room-<?php echo $row1[0];
                      ?>
                      </option>
                      <?php endwhile;?>
                      <?php } ?>
                    </select> 
                  </div>
                </td>
                <td>
                  <div class="form-group">
                    <?php   include 'sub.php';?>
                    <select class="form-control" name="sub_code516">
                      <option>Sub_code</option>
                      <?php while($row3 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row3[0];?>"><?php echo $row3[0];?>
                      </option>
                      <?php endwhile;?>
                      <?php   include 'teacher.php';?>
                    </select><br>
                    <select class="form-control" name="teacher_id516">
                      <option>Teacher</option>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?>
                      </option>
                      <?php endwhile;?>
                    </select><br>        
                    <?php   include 'room.php';?>
                    <select class="form-control" name="room_no516">
                      <option>room_no</option>
                      <?php 
                        $query_room = "SELECT room_no FROM room ";
                        $room_result = mysqli_query($conn, $query_room);
                        while ($row = mysqli_fetch_array($room_result)) { 
                      ?>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                        <option value="<?php echo $row1[0];?>">
                          room-<?php echo $row1[0];
                      ?>
                      </option>
                      <?php endwhile;?>
                      <?php } ?>
                    </select> 
                  </div>
                </td>
              </tr>
                  <tr>
                  <th scope="row">Sunday</th>
                  <td>
                  <div class="form-group">
                    <?php   include 'sub.php';?>
                    <select class="form-control" name="sub_code608">
                      <option>Sub_code</option>
                      <?php while($row3 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row3[0];?>"><?php echo $row3[0];?>
                      </option>
                      <?php endwhile;?>
                      <?php   include 'teacher.php';?>
                    </select><br>
                    <select class="form-control" name="teacher_id608">
                      <option>Teacher</option>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?>
                      </option>
                      <?php endwhile;?>
                    </select><br>        
                    <?php   include 'room.php';?>
                    <select class="form-control" name="room_no608">
                      <option>room_no</option>
                      <?php 
                        $query_room = "SELECT room_no FROM room ";
                        $room_result = mysqli_query($conn, $query_room);
                        while ($row = mysqli_fetch_array($room_result)) { 
                      ?>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                        <option value="<?php echo $row1[0];?>">
                          room-<?php echo $row1[0];
                      ?>
                      </option>
                      <?php endwhile;?>
                      <?php } ?>
                    </select> 
                  </div>
                </td>
                  <td>
                  <div class="form-group">
                    <?php   include 'sub.php';?>
                    <select class="form-control" name="sub_code609">
                      <option>Sub_code</option>
                      <?php while($row3 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row3[0];?>"><?php echo $row3[0];?>
                      </option>
                      <?php endwhile;?>
                      <?php   include 'teacher.php';?>
                    </select><br>
                    <select class="form-control" name="teacher_id609">
                      <option>Teacher</option>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?>
                      </option>
                      <?php endwhile;?>
                    </select><br>        
                    <?php   include 'room.php';?>
                    <select class="form-control" name="room_no609">
                      <option>room_no</option>
                      <?php 
                        $query_room = "SELECT room_no FROM room ";
                        $room_result = mysqli_query($conn, $query_room);
                        while ($row = mysqli_fetch_array($room_result)) { 
                      ?>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                        <option value="<?php echo $row1[0];?>">
                          room-<?php echo $row1[0];
                      ?>
                      </option>
                      <?php endwhile;?>
                      <?php } ?>
                    </select> 
                  </div>
                </td>
                  <td>
                  <div class="form-group">
                    <?php   include 'sub.php';?>
                    <select class="form-control" name="sub_code610">
                      <option>Sub_code</option>
                      <?php while($row3 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row3[0];?>"><?php echo $row3[0];?>
                      </option>
                      <?php endwhile;?>
                      <?php   include 'teacher.php';?>
                    </select><br>
                    <select class="form-control" name="teacher_id610">
                      <option>Teacher</option>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?>
                      </option>
                      <?php endwhile;?>
                    </select><br>        
                    <?php   include 'room.php';?>
                    <select class="form-control" name="room_no610">
                      <option>room_no</option>
                      <?php 
                        $query_room = "SELECT room_no FROM room ";
                        $room_result = mysqli_query($conn, $query_room);
                        while ($row = mysqli_fetch_array($room_result)) { 
                      ?>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                        <option value="<?php echo $row1[0];?>">
                          room-<?php echo $row1[0];
                      ?>
                      </option>
                      <?php endwhile;?>
                      <?php } ?>
                    </select> 
                  </div>
                </td>
                  <td>
                  <div class="form-group">
                    <?php   include 'sub.php';?>
                    <select class="form-control" name="sub_code251">
                      <option>Sub_code</option>
                      <?php while($row3 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row3[0];?>"><?php echo $row3[0];?>
                      </option>
                      <?php endwhile;?>
                      <?php   include 'teacher.php';?>
                    </select><br>
                    <select class="form-control" name="teacher_id251">
                      <option>Teacher</option>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?>
                      </option>
                      <?php endwhile;?>
                    </select><br>        
                    <?php   include 'room.php';?>
                    <select class="form-control" name="room_no251">
                      <option>room_no</option>
                      <?php 
                        $query_room = "SELECT room_no FROM room ";
                        $room_result = mysqli_query($conn, $query_room);
                        while ($row = mysqli_fetch_array($room_result)) { 
                      ?>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                        <option value="<?php echo $row1[0];?>">
                          room-<?php echo $row1[0];
                      ?>
                      </option>
                      <?php endwhile;?>
                      <?php } ?>
                    </select> 
                  </div>
                </td>
                  <td>
                  <div class="form-group">
                    <?php   include 'sub.php';?>
                    <select class="form-control" name="sub_code612">
                      <option>Sub_code</option>
                      <?php while($row3 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row3[0];?>"><?php echo $row3[0];?>
                      </option>
                      <?php endwhile;?>
                      <?php   include 'teacher.php';?>
                    </select><br>
                    <select class="form-control" name="teacher_id612">
                      <option>Teacher</option>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?>
                      </option>
                      <?php endwhile;?>
                    </select><br>        
                    <?php   include 'room.php';?>
                    <select class="form-control" name="room_no612">
                      <option>room_no</option>
                      <?php 
                        $query_room = "SELECT room_no FROM room ";
                        $room_result = mysqli_query($conn, $query_room);
                        while ($row = mysqli_fetch_array($room_result)) { 
                      ?>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                        <option value="<?php echo $row1[0];?>">
                          room-<?php echo $row1[0];
                      ?>
                      </option>
                      <?php endwhile;?>
                      <?php } ?>
                    </select> 
                  </div>
                </td>
                  <td>
                  <div class="form-group">
                    <?php   include 'sub.php';?>
                    <select class="form-control" name="sub_code613">
                      <option>Sub_code</option>
                      <?php while($row3 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row3[0];?>"><?php echo $row3[0];?>
                      </option>
                      <?php endwhile;?>
                      <?php   include 'teacher.php';?>
                    </select><br>
                    <select class="form-control" name="teacher_id513">
                      <option>Teacher</option>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?>
                      </option>
                      <?php endwhile;?>
                    </select><br>        
                    <?php   include 'room.php';?>
                    <select class="form-control" name="room_no613">
                      <option>room_no</option>
                      <?php 
                        $query_room = "SELECT room_no FROM room ";
                        $room_result = mysqli_query($conn, $query_room);
                        while ($row = mysqli_fetch_array($room_result)) { 
                      ?>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                        <option value="<?php echo $row1[0];?>">
                          room-<?php echo $row1[0];
                      ?>
                      </option>
                      <?php endwhile;?>
                      <?php } ?>
                    </select> 
                  </div>
                </td>
                  <td>
                  <div class="form-group">
                    <?php   include 'sub.php';?>
                    <select class="form-control" name="sub_code614">
                      <option>Sub_code</option>
                      <?php while($row3 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row3[0];?>"><?php echo $row3[0];?>
                      </option>
                      <?php endwhile;?>
                      <?php   include 'teacher.php';?>
                    </select><br>
                    <select class="form-control" name="teacher_id614">
                      <option>Teacher</option>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?>
                      </option>
                      <?php endwhile;?>
                    </select><br>        
                    <?php   include 'room.php';?>
                    <select class="form-control" name="room_no614">
                      <option>room_no</option>
                      <?php 
                        $query_room = "SELECT room_no FROM room ";
                        $room_result = mysqli_query($conn, $query_room);
                        while ($row = mysqli_fetch_array($room_result)) { 
                      ?>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                        <option value="<?php echo $row1[0];?>">
                          room-<?php echo $row1[0];
                      ?>
                      </option>
                      <?php endwhile;?>
                      <?php } ?>
                    </select> 
                  </div>
                </td>
                  <td>
                  <div class="form-group">
                    <?php   include 'sub.php';?>
                    <select class="form-control" name="sub_code615">
                      <option>Sub_code</option>
                      <?php while($row3 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row3[0];?>"><?php echo $row3[0];?>
                      </option>
                      <?php endwhile;?>
                      <?php   include 'teacher.php';?>
                    </select><br>
                    <select class="form-control" name="teacher_id615">
                      <option>Teacher</option>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?>
                      </option>
                      <?php endwhile;?>
                    </select><br>        
                    <?php   include 'room.php';?>
                    <select class="form-control" name="room_no615">
                      <option>room_no</option>
                      <?php 
                        $query_room = "SELECT room_no FROM room ";
                        $room_result = mysqli_query($conn, $query_room);
                        while ($row = mysqli_fetch_array($room_result)) { 
                      ?>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                        <option value="<?php echo $row1[0];?>">
                          room-<?php echo $row1[0];
                      ?>
                      </option>
                      <?php endwhile;?>
                      <?php } ?>
                    </select> 
                  </div>
                </td>
                <td>
                  <div class="form-group">
                    <?php   include 'sub.php';?>
                    <select class="form-control" name="sub_code616">
                      <option>Sub_code</option>
                      <?php while($row3 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row3[0];?>"><?php echo $row3[0];?>
                      </option>
                      <?php endwhile;?>
                      <?php   include 'teacher.php';?>
                    </select><br>
                    <select class="form-control" name="teacher_id616">
                      <option>Teacher</option>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                      <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?>
                      </option>
                      <?php endwhile;?>
                    </select><br>        
                    <?php   include 'room.php';?>
                    <select class="form-control" name="room_no616">
                      <option>room_no</option>
                      <?php 
                        $query_room = "SELECT room_no FROM room ";
                        $room_result = mysqli_query($conn, $query_room);
                        while ($row = mysqli_fetch_array($room_result)) { 
                      ?>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>
                        <option value="<?php echo $row1[0];?>">
                          room-<?php echo $row1[0];
                      ?>
                      </option>
                      <?php endwhile;?>
                      <?php } ?>
                    </select> 
                  </div>
                </td>
              </tr>